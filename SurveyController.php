<?php
require_once('./DatabaseModel.php');
require_once('./FileModel.php');

class SurveyController {
    private $_video_file;
    private $_ppt_file;
    private $_db_model;

    private $student;

    private $dept_name;
    private $std_id;
    private $name;
    private $phone;
    private $email;
    private $prof_name;
    private $theme;

    public function __construct() {
        $this->setProps();

        $this->_video_file  = new FileModel($this->ppt, $this->std_id);
        $this->_ppt_file    = new FileModel($this->video, $this->std_id);
        $this->_db_model    = DatabaseModel::getInstance();
    }

    public function setProps() {
        $this->dept_name    = $_POST['affiliation'];
        $this->std_id       = $_POST['std_number'];
        $this->name         = $_POST['name'];
        $this->phone        = $_POST['phone_number'];
        $this->email        = $_POST['email'];
        $this->prof_name    = $_POST['pro_name'];
        $this->theme        = $_POST['thema'];

        $this->ppt          = $_FILES['ppt_name'];
        $this->video        = $_FILES['video'];
    }

    public function survey($std_id = null) {

        $student = null;

        if (!isset($std_id)) $std_id = $this->std_id;

        // 이미 등록한 유저인지 확인.
        if ($student = $this->isUploaded()) {
            // 유저 정보 유효성 검사.
            if (!$this->validation($student["id"], $student["name"])) {
                include_once('./index.php');
                alert("기존에 제출한 이름과 학번이 일치하지 않습니다. 국제교류원 김채원 선생님에게 연락 바랍니다. 053-940-5630");
                return false;
            }
            // 기존에 저장된 파일을 tmps로 이동.
            $this->_ppt_file->moveToTmp($student["ppt"]);
            $this->_video_file->moveToTmp($student["video"]);
        }
        // POST로 전달 받은 파일 업로드.
        $ppt_name   = $this->_ppt_file->upload();
        $video_name = $this->_video_file->upload();

        // DB에 설문 결과 저장.
        if ($student) {
            $this->_db_model->update($this->std_id, $ppt_name, $video_name);
        } else {
            $this->_db_model->insert($this->std_id, $this->name, $this->dept_name, $this->phone, $this->theme, $this->prof_name, $ppt_name, $video_name);
        }

        include_once('./index.php');
        alert("제출이 완료되었습니다.");
    }

    public function isUploaded($std_id = null) {

        if (!isset($std_id)) $std_id = $this->std_id;

        return $this->_db_model->get_student($std_id);
    }

    public function validation($std_id, $name) {
        return $this->std_id == $std_id && $this->name == $name;
    }
}