@extends('layouts.master')
@section('content')
<div class="pt-1">
<div class="sliderAx h-auto">
    <div id="slider-1">
      <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544427920-c49ccfb85579?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1422&q=80)">
     <div class="md:w-1/2">
      <p class="font-bold text-sm uppercase">Services</p>
      <p class="text-3xl font-bold">Hello world</p>
      <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
      <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
      </div>  
  </div> <!-- container -->
    <br>
    </div>

    <div id="slider-2">
      <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
     
<p class="font-bold text-sm uppercase">Services</p>
      <p class="text-3xl font-bold">Hello world</p>
      <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
      <a href="#" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
       
  </div> <!-- container -->
    <br>
    </div>
  </div>
<div  class="flex justify-between w-12 mx-auto pb-2">
</div>

<form action="" method="post" class="container mx-auto text-center">
    <label class="text-gray-600 font-light">Nhập số điện thoại</label>
    <br>
<input type='text' placeholder="Enter your input here" class="w-6/12 mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
<br>
<label class="text-gray-600 font-light">Thời gian đặt lịch</label>
    <br>
    <div>
        <button type="button" class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-gray-200 rounded px-4 py-2">
            <span class=" text-black text-center px-4 py-2">Hôm nay</span>
            <hr><br>
            <a href="">Thứ 2</a> 
        </button>
        <button type="button" class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-gray-200 rounded px-4 py-2">
            <span class=" text-black text-center px-4 py-2">Ngày mai</span>
            <hr><br>
            <a href="">Thứ 2</a> 
        </button>
        <button type="button" class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-gray-200 rounded px-4 py-2">
            <span class=" text-black text-center px-4 py-2">Ngày kia</span>
            <hr><br>
            <a href="">Thứ 2</a> 
        </button>
    </div>
    <br>
    <div>
        <span>Chọn stylelist</span>
        <br>
        <select class="w-6/12 border bg-white rounded px-3 py-2 outline-none">
        <option class="py-1">Option 1</option>
        <option class="py-1">Option 2</option>
        <option class="py-1">Option 3</option>
    </select>
    </div>
    <br>
    <div>
        <span>Ghi chú</span><br>
        <textarea class="w-6/12 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
    </div>
    
<button type="button" class="border border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-gray-200 rounded px-4 py-2 my-2">Đăt lịch</button>
</form>

</div>

<script src="{{ ('https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js') }}"></script>
<script>
  var cont=0;
function loopSlider(){
var xx= setInterval(function()
{
      switch(cont)
      {
      case 0:{
          $("#slider-1").fadeOut(400);
          $("#slider-2").delay(400).fadeIn(400);
          $("#sButton1").removeClass("bg-purple-800");
          $("#sButton2").addClass("bg-purple-800");
      cont=1;
      
      break;
      }
      case 1:
      {
      
          $("#slider-2").fadeOut(400);
          $("#slider-1").delay(400).fadeIn(400);
          $("#sButton2").removeClass("bg-purple-800");
          $("#sButton1").addClass("bg-purple-800");
         
      cont=0;
      
      break;
      }
      
      
      }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

  $("#slider-2").fadeOut(400);
  $("#slider-1").delay(400).fadeIn(400);
  $("#sButton2").removeClass("bg-purple-800");
  $("#sButton1").addClass("bg-purple-800");
  reinitLoop(4000);
  cont=0
  
  }
  
  function sliderButton2(){
  $("#slider-1").fadeOut(400);
  $("#slider-2").delay(400).fadeIn(400);
  $("#sButton1").removeClass("bg-purple-800");
  $("#sButton2").addClass("bg-purple-800");
  reinitLoop(4000);
  cont=1
  
  }

  $(window).ready(function(){
      $("#slider-2").hide();
      $("#sButton1").addClass("bg-purple-800");
      

      loopSlider();
   
  
  
  });

</script>
@endsection