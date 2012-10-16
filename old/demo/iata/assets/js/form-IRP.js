$(function(){                                                                                                                  
    var errorSum= 0;
    
    $('#test_form').validate({
//        onkeyup: false,      
//        onclick: false,//checkbox, radio
//        onfocusout: false,//on submit
        rules:{
            firstname:{
                allInUpperCase:true               
            },
            lastname:{                            
                allInLowerCase:true
            },
            email:{
                email:true
            },
            phone:{                            
                phoneFormat1:true                
            },
            birthdate:{                            
                dateFormat: true
            },
            zipcode:{                            
                zipcodeUS:true
            }            
        },                    
        submitHandler: function(form) {                        
            if ($("#test_form").valid()) { //    form.submit();            
                //@Save data to file, completion time, consecutive error rate;                                        
                var endTime = new Date();                
                var timeDiff = endTime - startTime;
                var seconds = Math.round(timeDiff % 60);                                                                
                filepath="/Users/MDSaraG/Downloads/output.txt";                
                var text = $.twFile.load(filepath); 
                if(text){//copy text 
                    var output= text;
                    output += formType +" Form: Completion Time=" + seconds +"s, " +"Consecutive Error Rate="+(errorSum)+ ", Finishing time="+endTime +"\n";                  
                    $.twFile.save(filepath, output);
                    alert("Great! You have completed the form. Click 'OK' to proceed.");
                    window.location.href = "http://localhost:8080/bootstrap/docs/@start.php";
                }
                else{
                    alert("twFile read file fails!");
                }            
            }         
        },
        invalidHandler: 
        function(form, validator) {
            errorSum+=1;
        //alert(sum);
        },                                         
        messages:{
            firstname: {
                required:"First Name is required"
            },
            lastname: {
                required:"Last Name is required"
            },
            email:{
                required:"Email address is required"
            },
            phone:{
                required:"Phone number is required"
            },
            birthdate:{
                required: "Birth Date is required"
            },
            zipcode:{
                required: "Zip Code is required"
            }  
                        
        }                               
    });//validate
                
    //form clean and focus
    $('input').val('');
    $('#firstname').focus();
    var startTime = new Date();
    
//@Enter keypress
//    $('#submit').keypress(function(e) {
//        if(e.which == 13) {//Enter keypress            
//            $('#submit').click();
//        }
//    });             
});