<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="simpleslider.js"></script>
<style>
.slide-wrap {
	margin: 5% auto 0;
	width: 50%;
}



.slide-mask {

	position: relative;

	/* overflow: hidden; */

	height: 130px;

}



.slide-group {

	position: absolute;

	top: 0px;

	left: 0;

	width: 100%;

}




.slide {

	height: 130px;

	font: 100 90px/135px;

	font-size: 2em;


	text-align: center;

	text-transform: uppercase;

	/* list-style-type: none; */

	/* margin-left:50px; */
	display:inline-block;
}
.slide-nav { text-align: center; }



	.slide-nav ul {

	  margin: 0;

	  padding: 0;

	  list-style-type: none;

	}



	.slide-nav li {

	  display: inline-block;

	  width: 10px;

	  height: 10px;

	  background: rgb(175, 56, 56);

	  cursor: pointer;

	  margin-left: .5em;

	  list-style-type: none;

	  border-radius: 50%;

	}



	.slide-nav li.current { background: rgb(144, 39, 39); }
</style>
<div class="slide-wrap">
	  <div class="slide-mask">

	    <ul class="slide-group">

	      <li class="slide">Content 1</li>

	      <li class="slide">Content 2</li>

	      <li class="slide">Content 3</li>

	      <li class="slide">Content 4</li>

	      <li class="slide">Content 5</li>

	      <li class="slide">Content 6</li>

	    </ul>

	  </div>

	  <div class="slide-nav">

	    <ul>

	      <li class="bullet"></li>

	      <li class="bullet"></li>

	      <li class="bullet"></li>

	      <li class="bullet"></li>

	      <li class="bullet"></li>

	      <li class="bullet"></li>

	    </ul>

	  </div>

	</div>
