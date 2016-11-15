@include('khungtrang.dautrang')

<div class="col-b3"> 
	@include('khungtrang.traitrang') 
</div>

<div class="col-b1">
	@yield('NoiDung')
</div>

<div class="col-b2 last"> 
	@include('khungtrang.phaitrang')
</div>

@include('khungtrang.cuoitrang')