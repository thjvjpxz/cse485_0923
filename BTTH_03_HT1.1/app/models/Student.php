<?php
    class Student {
        private $id;
        private $studentName;
        private $email;
        private $dob;
        private $classId;

        /**
         * @param $studentName
         * @param $email
         * @param $dob
         * @param $classId
         */
        public function __construct($studentName, $email, $dob, $classId)
        {
            $this->studentName = $studentName;
            $this->email = $email;
            $this->dob = $dob;
            $this->classId = $classId;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getStudentName()
        {
            return $this->studentName;
        }

        /**
         * @param mixed $studentName
         */
        public function setStudentName($studentName)
        {
            $this->studentName = $studentName;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getDob()
        {
            return $this->dob;
        }

        /**
         * @param mixed $dob
         */
        public function setDob($dob)
        {
            $this->dob = $dob;
        }

        /**
         * @return mixed
         */
        public function getClassId()
        {
            return $this->classId;
        }

        /**
         * @param mixed $classId
         */
        public function setClassId($classId)
        {
            $this->classId = $classId;
        }

    }