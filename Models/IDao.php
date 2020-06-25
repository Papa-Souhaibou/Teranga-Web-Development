<?php
    interface IDao {
        public function delete($id);
        public function findByMatricule($matricule);
        public function findByType($type);
    }