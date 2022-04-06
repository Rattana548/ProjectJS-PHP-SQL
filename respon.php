<?php


    class Response{
        public static function success($result = [], $message = 'success' , $status = 200){
            $res = array(
                'error' => false,
                'message' => $message,
                'res' => $result
            );
            http_response_code($status);
            echo json_encode($res);
        }

        public static function error($message = 'error' , $status = 404){
            $res = array(
                'error' => true,
                'message' => $message
            );
            http_response_code($status);
            echo json_encode($res);
        }

    }




?>