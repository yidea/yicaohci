var $ = function (id){return document.getElementById(id);}
String.prototype.trim = function () {
    return this.replace(/^\s*/, "").replace(/\s*$/, "");//example s.trim()
}

function checkMonthInvest(str){
  var error = "";
  if(isNaN(str)||str<=0){
    error='Monthly Investment amount is not valid number';
  }
  if(error){
    $('errorMessage').firstChild.nodeValue = error;

  }
  return error;
}

function checkAnnualRate(str){
  var error="";
  if(isNaN(str)||str<=0||str>20){
    error='Annual Interest Rate amount is not valid number';
  }
  if(error) alert(error);
  return error;
}

function checkNumYear(str){}

var cacluateFutureValue =function (){
   // if input not validate as positive number , display error
    //var numMonthInvest = parseFloat($('monthInvest').value);
    //var numAnnualRate = parseFloat($('annualRate').value);        

    checkMonthInvest($('monthInvest').value)
    checkAnnualRate($('annualRate').value);
    checkNumYear();
    
   
//    else if(isNaN(numAnnualRate) || numAnnualRate<=0){
//      alert("Annual Interest Rate is not a valid number");
//      $('annualRate').focus();
//    }
//    else if(isNaN(numYear) || numYear<=0){
//      alert('Number of years is not a vaild number');
//      $('numYear').focus();
//    }
//    else{//validated then calculate value
//      var numMonthRate = numAnnualRate/12/100;
//      var numMonth = 12*numYear;
//      var numFutureValue = 0;
//      for(var i=0; i<numMonth;i++){
//         numFutureValue= (numFutureValue+numMonthInvest)*(1+numMonthRate)
//      }
//      //alert(numFutureValue.toFixed(2));
//
//      $('futureValue').setAttribute('value',numFutureValue.toFixed(2));
//
//    }
    
}

var numTest = Math.round(1.5);
var num = 10.121;
//document.write(num.toFixed(2));//toFixed() return 10.12
var str = 'http://yicaohci.com';
//document.write(str.substr(7));//output yicaohci.com
//var today = new Date();
//document.write(today.getMonth());// it is september, while it display 8

//var numTextbox = $('num')//document.getElementById('num');
////numTextbox.disabled = true;// disabled textbox
//numTextbox.value= '';
//numTextbox.focus();
//var result = parseFloat(numTextbox.value) +10;
//document.write(numTextbox.value + '+10=' + result );//need to convert2float

//window.onload , assign btn calculate onclick
window.onload = function (){
  $('monthInvest').focus();
  $('btnCal').onclick = cacluateFutureValue;
     
}



