<?php
//print_r($_POST); die;

$subject = "Leads Details";
                $message = "<table style='border-collapse: collapse' border='1' cellspacing='0' cellpadding='6'>
                    <tbody>
                        <tr style='background: #47B7E8; color: #ffffff;'>
                            <th colspan='2'>Contact Information</th>
                        </tr>
                        
                        <tr style='background: #eee;'>
                            <td>Service</td><td>{$_POST['service']}</td>
                        </tr>
                        <tr style='background: #eee;'>
                            <td>Doctor</td><td>{$_POST['doctor']}</td>
                        </tr>
                        <tr style='background: #eee;'>
                            <td>Name</td><td>{$_POST['name']}</td>
                        </tr>
                        <tr style='background: #eee;'>
                            <td>Phone</td><td>{$_POST['phone']}</td>
                        </tr> 
                        <tr style='background: #eee;'>
                            <td>Country</td><td>{$_POST['country']}</td>
                        </tr>
                        <tr style='background: #eee;'>
                            <td>Email</td><td>{$_POST['email']}</td>
                        </tr>  
                        
                         <tr style='background: #eee;'>
                            <td>Message</td><td>{$_POST['message']}</td>
                        </tr>
                        
                 
                        
                        
                       
                        
                    </tbody>
                </table>";
                
                
                // echo $_POST['name'];
                // die();
               
                    
                    $to = "nitintanwar1610@gmail.com, formquery@convicare.com";
                    $from = "infor@brandingpioneers.co.in";
                   
                    $headers .= 'MIME-Version: 1.0'."\r\n";
                    $headers ="From: $from \r\n";
                    $headers .= 'Content-type:text/html;charset=iso-8859-1'."\r\n"; 
                    if(@mail($to,$subject,$message,$headers)){
                        $redirect = 'index.php';
                        echo "<script>window.location='{$redirect}';</script>";
                   
                    }



?>