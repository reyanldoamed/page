<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Archivo extends CI_Model {
  
        public function UploadArchivo($path = '',$message = '')
        {
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'pdf|docx|pptx';
               
                $this->load->library('upload', $config);
               
                if ( ! $this->upload->do_upload('archivo')){
                        $error = $this->upload->display_errors();
                        echo $this->html();
                        if($message == ''){ //cierre de php ?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("Error al subir el archivo");
                                </script> <?php
                        }else{            ?>
                                <script type="text/javascript" charset="utf-8">
                                        alert("<?= $message ?>");
                                </script> <?php
                        }
                        return null;
                }
                else{
                        $file_data = $this->upload->data();
                        return $file_data1['file_name'];
                }
        }
 
        public function html($value='')
        {
                return "
                <html>
                <head>
                        <title> Upload Error </title>
                </head>
                <body>
               
                </body>
                </html>";
        }
 
}