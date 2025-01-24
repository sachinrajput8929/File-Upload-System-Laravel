@if(Auth::User()->email)

 {{-- <img src="{{ url('uploads/files/' . $file) }}" alt="File Image" >
  --}}

<style>
 
.iframe {
	width: 99%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 1px;
	/* bottom: 10px; */
	right: 0;
	border: 1px black;
}
.container {
	/* position: relative; */
	width: 100%;
	/* overflow: hidden; */
	padding-top: 44%;
}

</style>


<div class="container">
	<iframe src="{{  ('uploads/files/' . $file) }}" class="iframe" loading="lazy"></iframe>
</div>

  @endif