/* JQuery -js missing manual*/
//@Basic selector(id,class,tag)
var message =$('#message');//id
var navmenu =$('.navmenu');//class
var linkslist = $('#navmenu a');//tag select all a links inside id

//@Advanced selector(adjacent ,attribute  )
var divShow = $('h2+div');//select adjacent tag appear next after a tag
var imgAlt = $('img[alt]');//select img which has 'alt' attribute
var inputText = $('input[type=text]');//select input which type is text

//@common used selector
var common1 = $('a[href^=http://]')//select external site links- a href beginning with http://
var common2 =$('a[href^=mailto:]')//select mailto links- a href beginning with mailto
var common3 = $('a[href$=.pdf]')//select pdf files- a href ending with .pdf
var common4 = $('a[href*=index.html]'); //select links href which contains word 'index.html'
var common5 = $('a:not([href^=http://])');//exclude external links

//Filter - filter selection
var filter1 = $('.table1 tr:even');//:even- select every even elements from the selection(start at 0,2,4)
var filter2 = $('.table2 tr:odd');//:odd- select every odd elements (1,3,5)
var filter3 = $('a:not(.navButton)');//:not -ignore certain class or id elements
var filter4 = $('li:has(a)');//:has -select li elements contain selector a
var filter5 = $('p:contain(welcom)');//:contain- select p element cotaining specific text
var filter6 = $('div:hidden');//:hidden- select div elements that are hidden
var fitler7 = $('div:visible');//:visible- opposite of :hidden

//@Chaining function
$('#message').width(300).height(300).text('hi').fadeOut(2000);//work under div selctor

//@Add Html content(.html(),.append())
$('#test1').text('text change to text1');//.text() -only change the text inside the html tag
$('#test1').html('<p> test1 </p>');//.html() -change html content inside the selector, seem as DOM innerHTML
$('#test1').append('<p>inner append test</p>');//.append()- adds HTML as last child elements of the selector
$('#test1').prepend('<p>inner prepend test</p>');//.prepend()- add HTML directly as first child element in the selector
$('#test1').after('<p> after test1</p>');//.after()- add HTML contend after selector;
$('#test1').before('<p> after test1</p>');//.before()- add HTML contend before selector;

//@Removing& replace Selection Html element
$('#removeDiv').remove();//.remove()- remove element
$('#replaceDiv').replace('<p>p replace div</p>');//.replace() -replace selection with new content

//@CSS classname add and remove
$('a[href^=http://]').addClass('externalLinks');//.addClass() - add certain class to external link selection
$('#alertBox').reomveClass('highlight');//.removeClass()- remove specific class from selected elements
$('row').toggleClass('highlight');//.toggleClass(); add or remove class automaticly

//@CSS attribute set&get (not recommended to use this,use add class)
var bgColor = $('#message').css('background-color');//.css('attribute')- get css value
$('#cssDiv').css('border','1px solid black');//.css('attribute',value) -set css value

//@Read and set HTML attributes
var imageFile =$('img').attr('src');
//document.write(imageFile);
alert(imageFile);

document.write("lalalal");



