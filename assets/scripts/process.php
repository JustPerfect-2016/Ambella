<?php

if (isset($_POST['email_address'])) {

            $contact_fullname = $_POST['contact_fullname'];
            $contact_phone = $_POST['contact_phone'];
            $contact_companyname = $_POST['contact_companyname'];
            $email_address = $_POST['email_address'];
            $contact_question = $_POST['contact_question'];
            $date = date("Y/m/d");
         
            $email_subject = "Ambella website Enquiry";
            $to = "david@justperfect.co.za";
            $headers = "From: info@ambella.co.za \r\n";
            //$headers .= "BCC: chris@justperfect.co.za \r\n";
            
             $email_body = "You have received a new contact form lead from: $email_address.\n";
             $email_body .= "Full Name: $contact_fullname \n";
             $email_body .= "Contact Number: $contact_phone \n";
             $email_body .= "Company: $contact_companyname \n";
             $email_body .= "Email: $email_address \n";
             $email_body .= "Message: $contact_question \n";
             $email_body .= "Date: $date \n";
                              
            mail($to, $email_subject, $email_body, $headers);
            
            $host= "sql19.jnb1.host-h.net";
            $user= "ipaycqvhek_u1";
            $password= "kvUew3r8";
            $database= "ipaycqvhek_instant";
           /*
            try {
                $conn = mysqli_connect($host, $user, $password, $database);
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
            
            $query = "INSERT INTO `ambella_leads` (`id`, `firstname`, `lastname`, `email`, `telephone`, `company`,`website`,`payment_method`, `date`) "
                    . "VALUES (NULL, '$firstname', '$lastname', '$email', '$tel', '','$website','$serviceRequired','$date')";
            
            mysqli_query($conn, $query);
            mysql_close();
            */
        }
        
        ?>