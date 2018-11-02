<?php
require_once('./utils.php');

class FileModel {
    const UPLOAD_DIR    = './uploads/'; // 업로드 할 경로
    const TMP_DIR       = './tmps/';

    private $_error     = null;
    private $_name      = null;
    private $_tmp_name  = null;
    private $_uploaded  = null;
    private $_ext       = null;

    public function __construct(array $file, $std_id) {
        
        $this->_error       = $file['error'];
        $this->_name        = $file['name'];
        $this->_tmp_name    = $file['tmp_name'];

        $explodeStr         = explode('.', $this->_name);
        $this->_ext         = array_pop($explodeStr);

        $this->makeDirectory();
        $this->_file_prefix = $this->getFilePrefix($std_id);
    }

    public function makeDirectory($desDir = self::UPLOAD_DIR) {
        if (!is_dir($desDir))
            return mkdir($desDir);
        return true;
    }

    public function getFilePrefix($studentId, $crntTime = null) {
        if (!isset($crntTime))
            $crntTime = date("YmdHis");

        return $crntTime . "_" . $studentId;
    }

    public function getFileExt($file_name = null) {
        if (!isset($file_name)) $file_name = $this->_name;
        $explodeStr = explode('.', $file_name);
        return array_pop($explodeStr);
    }

    public function upload($save_dir = self::UPLOAD_DIR, $file_name = null, $tmp_name = null, $file_prefix = null, $file_ext = null) {
        if (!isset($file_name))     $file_name = $this->_name;
        if (!isset($tmp_name))      $tmp_name = $this->_tmp_name;
        if (!isset($file_prefix))   $file_prefix = $this->_file_prefix;
        if (!isset($file_ext))      $file_ext = $this->getFileExt();

        if (isset($_POST['submit'])) {

            if (is_uploaded_file($tmp_name)) {

                // 한글 파일명 깨짐 방지.
                $encodedOutput = mb_convert_encoding($file_name, "EUC-KR");

                // 파일을 저장할 경로명
                $dest = $save_dir . $file_prefix . "." . $file_ext;

                if (move_uploaded_file($tmp_name, $dest)){
                    logger("업로드 성공($dest)");
                    return $dest;
                } else {
                    logger("파일 저장 에러");
                    return ;
                }
            } else {
                logger("POST 데이터 에러");
                return ;
            }
        }
    }

    public function moveToTmp($target) {
        $this->_uploaded = $target;

        $explodeStr = explode('/', $target);
        $file_name = array_pop($explodeStr);

        $dest = self::TMP_DIR . $file_name;

        if ($this->makeDirectory(self::TMP_DIR)) {
            if (rename($target, $dest)) {
                return true;
            } else {
                logger("파일 이동 실패");
            }
        } else {
            logger("temps 폴더 생성 실패");
        }
    }
}