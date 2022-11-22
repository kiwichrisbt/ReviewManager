{$theme_url = "{root_url}/modules/ReviewManager" scope='global'}
<style>
  .rm_addcomment legend {
    font-weight:bold;
    font-style: italic;
  }

  .rm_addcomment .row {
    margin: 10px auto;
  }
  .rm_addcomment input:not([type='checkbox'],[type='radio']), .rm_addcomment select, .rm_addcomment textarea  {
    width: 100%;
  }
.rate {
    float: left;
    height: 46px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
    visibility: hidden;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:40px;
    color:#ccc;
    line-height: 1em;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;
    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

.yelprank_container h1 {
	font-size: 46px;
	line-height: 54px;
}
.flex-container{	
	display:flex;
	align-items:center;
	min-height: 40px;
}	
.flex-grow1{	
	flex-grow:1;
	padding-left: 10px;
}
.star-rating-sprite {
    text-indent: -9999em;
    display: inline-block;
    width: 128px;
    height: 27px;
    background: url({$theme_url}/images/star-rating-sprite.png) no-repeat;
}
.star-rating-sprite-0 {
    background-position: 0px 0px;
}
.star-rating-sprite-1 {
    background-position: 0px -27px;
}
.star-rating-sprite-2 {
    background-position: 0px -54px;
}
.star-rating-sprite-3 {
    background-position: 0px -81px;
}
.star-rating-sprite-4 {
    background-position: 0px -108px;
}

.star-rating-sprite-5 {
    background-position: 0px -135px;
}

.star-rating-sprite-6 {
    background-position: 0px -162px;
}

.star-rating-sprite-7 {
    background-position: 0px -189px;
}

.star-rating-sprite-8 {
    background-position: 0px -216px;
}

.star-rating-sprite-9 {
    background-position: 0px -243px;
}

.star-rating-sprite-10 {
    background-position: 0px -270px;
}

.star-rating-sprite-11 {
    background-position: 0px -297px;
}

.star-rating-sprite-12 {
    background-position: 0px -324px;
}

.star-rating-sprite-13 {
    background-position: 0px -351px;
}

.star-rating-sprite-14 {
    background-position: 0px -378px;
}

.star-rating-sprite-15 {
    background-position: 0px -405px;
}

.star-rating-sprite-16 {
    background-position: 0px -432px;
}

.star-rating-sprite-17 {
    background-position: 0px -459px;
}

.star-rating-sprite-18 {
    background-position: 0px -486px;
}

.star-rating-sprite-19 {
    background-position: 0px -513px;
}

.star-rating-sprite-20 {
    background-position: 0px -540px;
}
.icon--sm {
    font-size: 1em;
}
.type--bold {
    font-weight: bold;
}
</style>