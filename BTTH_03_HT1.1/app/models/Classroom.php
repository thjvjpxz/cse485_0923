<?php

    class Classroom
    {
        private $id;
        private $className;

        /**
         * @param $className
         */
        public function __construct($className)
        {
            $this->className = $className;
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
        public function getClassName()
        {
            return $this->className;
        }

        /**
         * @param mixed $className
         */
        public function setClassName($className)
        {
            $this->className = $className;
        }

    }