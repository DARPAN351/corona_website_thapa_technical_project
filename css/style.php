<style type="text/css">

*{
	margin: 0 ;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Bangers', cursive; 

}

html{
	scroll-behavior: smooth;
}

/*/////// Navbar //////*/

.navbar_style{
	background-color: #a29bfa!important;
}

.navbar_style a{
	color: white;
}

/*/////// Main Header ////////*/

.rightside h1{
	font-size: 4rem;
}

.img_rotate img{
	animation: coronaAnimation 3s linear infinite;
}

/*//////////// Corona Latest Update /////////////*/

.corona_update h2{
	color: #ff7675;
}

.corona_update h1{
	font-size: 3rem;
	text-align: center;
}

/*/////// About Covid-19 ////////*/

.sub_section{
	background-color: #fbfaf0;
}


/*////////////Symptoms/////////*/



/*/////Prevention//////*/


/*////////Contact us Asap///////*/

/*//////////Footer Style////////*/

.footer_style{
	background-color: #a29bfa!important;
}

.footer_style p{
	margin-bottom: 0!important;
}


/*//////////Scroll Top//////////*/
#myBtn{
	display: none;   /*///Hidden By Deafault jQuery Function Will show it*/
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
	background-color: #00A8FF;
}

#myBtn:hover{
	background: #606060;
}



@keyframes coronaAnimation{
	0% {transform: rotate(0);}
	100% { transform: rotate(360deg); }
}

</style>