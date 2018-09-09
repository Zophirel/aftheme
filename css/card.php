<?php
  header("Content-type: text/css");
  $vis = "visible";
  $inv = "hidden";
  $boxW = "250px";
  $boxH = "300px";
?>

@import url('https://fonts.googleapis.com/css?family=Roboto:400,900');

* {
  box-sizing: border-box; }

body {
  font-family: Open Sans;
  font-size: 16px;
  line-height: 1.4;
    background-color: #f1f1f1; 

      -webkit-transition: none !important;
  -moz-transition: none !important;
  -o-transition: none !important;
  transition: none !important;
}
.card {
  position: relative;
  overflow: hidden;
  width:  <?= $boxW ?>;
  height: <?= $boxH ?>;
  background-color: #1c1c1c;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  transition: box-shadow 0.3s; }
  .card a {
    color: inherit;
    text-decoration: none; }

.card:hover {
  box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.3); }

.card__date {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 45px;
  height: 45px;
  padding-top: 10px;
  color: #FFF;
  text-align: center;
  line-height: 13px;
  font-weight: bold;
  background-color: #38c4a5;
  border-radius: 50%; }
  .card__date__day {
    display: block;
    font-size: 14px; }
  .card__date__month {
    display: block;
    font-size: 10px;
    text-transform: uppercase; }

.card__thumb {
  height: 235px;
  overflow: hidden;
  background-color: #000;
  transition: height 0.3s; }
  .card__thumb img {
    display: block;
    opacity: 1;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    -webkit-transform: scale(1);
        -ms-transform: scale(1);
            transform: scale(1); }
  .card:hover .card__thumb img {
    opacity: 0.6;
    -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
            transform: scale(1.2); }
  .card:hover .card__thumb {
    height: 90px; }

.card__body {
  position: relative;
  padding: 20px;
  padding-top: 12px;
  height: 185px;
  transition: height 0.3s; 

}
  .card:hover .card__body {
    height: 330px; }

.card__category {
  position: absolute;
  left: 0;
  top: -25px;
  height: 25px;
  padding: 0 15px;
  color: #FFF;
  font-size: 11px;
  line-height: 25px;
  text-transform: uppercase;
  background-color: #38c4a5; }

.card__title {
  margin: 0;
  font-size: 22px;
  color:white;
  font-weight: bold; }
  .card:hover .card__title {
    -webkit-animation: titleBlur 0.3s;
            animation: titleBlur 0.3s; }

.card__subtitle {
  margin: 0;
  padding: 0 0 10px 0;
  font-size: 13px;
  color: #38c4a5; }
  .card:hover .card__subtitle {
    -webkit-animation: subtitleBlur 0.3s;
            animation: subtitleBlur 0.3s; }

.button{
  margin: 0 auto;
  width: 200px;
  height: 37px;
  background-color:#38c4a5;
  position: relative;
  top: 32%;
  border-radius: 20px;
  display: block;
}

.button:hover{
  box-shadow: 0 0px 20px rgba(95, 207, 182, 1);
  transition: box-shadow 0.3s ease-in-out;
}

.button > p{
  text-align: center;
  color: white;
  font-family: 'Roboto';
  font-weight: 900;
  font-size: 15px;
  padding-top: 7px;
  opacity: 0.8;
}

.button > p:hover{
  text-align: center;
  font-family: 'Roboto';
  font-weight: 900;
  font-size: 15px;
  padding-top: 7px;
  opacity: 1;
  transition: opacity 0.3s ease-in-out;
}

.card__description {
  word-wrap: break-word;
  position: absolute;
  left: 20px;
  right: 20px;
  margin: 0;
  padding: 0;
  color: #666C74;
  font-size: 14px;
  line-height: 17px;
  visibility: <?= $inv ?>;
  transition: opacity 0.2s, -webkit-transform 0.2s;
  transition: opacity 0.2s, transform 0.2s;
  transition-delay: 0s;
  -webkit-transform: translateY(25px);
      -ms-transform: translateY(25px);
          transform: translateY(25px); }
  .card:hover .card__description {
    visibility: <?= $vis ?>;
    transition-delay: 0.1s;
    -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
            transform: translateY(0); }

.card__footer {
  position: absolute;
  bottom: 20px;
  left: 20px;
  right: 20px;
  font-size: 11px;
  color: #A3A9AB; }
  .card__footer .icon--comment {
    margin-left: 12px; }

.icon {
  display: inline-block;
  vertical-align: middle;
  margin-right: 2px; }

.icon--comment {
  background: url(../img/icon-comment.png);
  width: 14px;
  height: 14px;
  margin-top: -2px; }

.icon--time {
  background: url(../img/icon-time.png);
  width: 10px;
  height: 17px;
  margin-top: -3px; }

@-webkit-keyframes titleBlur {
  0% {
    opacity: 0.6;
    text-shadow: 0px 5px 5px rgba(0, 0, 0, 0.6); }

  100% {
    opacity: 1;
    text-shadow: 0px 5px 5px transparent; } }

@keyframes titleBlur {
  0% {
    opacity: 0.6;
    text-shadow: 0px 5px 5px rgba(0, 0, 0, 0.6); }

  100% {
    opacity: 1;
    text-shadow: 0px 5px 5px transparent; } }

@-webkit-keyframes subtitleBlur {
  0% {
    opacity: 0.6;
    text-shadow: 0px 5px 5px rgba(56, 196, 165, 0.6); }

  100% {
    opacity: 1;
    text-shadow: 0px 5px 5px rgba(56, 196, 165, 0); } }

@keyframes subtitleBlur {
  0% {
    opacity: 0.6;
    text-shadow: 0px 5px 5px rgba(56, 196, 165, 0.6); }

  100% {
    opacity: 1;
    text-shadow: 0px 5px 5px rgba(56, 196, 165, 0); } }

.flex-container {
  margin: 0 auto;
  list-style: none;
  
  max-width: 90%;
  padding-left: 0;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  
  -webkit-flex-flow: row wrap;
  justify-content: inherit;
}

.flex-item {
  width:  <?= $boxW ?>;
  height: <?= $boxH ?>;
  margin: 10px;
}

.pag {
margin: 0 auto;
clear:both;
padding:20px 0;
position:relative;
font-size:11px;
line-height:13px;
}

.pag span, .pag a {
display:block;
float:left;
margin: 2px 2px 2px 0;
padding:6px 9px 5px 9px;
text-decoration:none;
width:auto;
color:#fff;
background: #555;
}

.pag a:hover{
color:#fff;
background: #3279BB;
}

.pag .curr{
padding:6px 9px 5px 9px;
background: #3279BB;
color:#fff;
}

.menulink{
  text-align: center;
  color: black;
  font-size: 20px;
  font-weight: bold;
  list-style: none;
  display: inline-flex;
}
#mobilemenu{
  display: none;
}

li{
  font-family: 'Roboto', sans-serif;
  font-weight: 900;
}

#s{
  box-shadow: 0;
  transition: box-shadow 0.3s ease-in-out;
  outline-width: 0;
}

#s:hover, :focus{
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
/* 720p laptop */
@media screen and (min-width: 1024px)
{
  #s{
    margin-left: 55px;
    width: 87%;
    border-radius: 30px;
    border: 2px solid #f4f4f4;
    background-image: url('img/searchicon.png');
    background-position: 13px 15px;
    background-repeat: no-repeat;
    padding:15px 0px 13px 40px
  }

  .flex-container{
    max-width: 90%;
  }
  .menulink{
    padding-left: 76px;
  }
}

/* iPad */
@media screen and (max-width: 768px)
{
  #s{
    margin-left: 81px;
    width: 76%;
    border-radius: 30px;
    border: 2px solid #f4f4f4;
    background-image: url('img/searchicon.png');
    background-position: 3px 4px;
    background-repeat: no-repeat;
    padding:4px 0px 4px 40px
  }

  .flex-container{
    max-width: 79%;
  }
}

/* iPhone 6/7/8 PLUS */
@media screen and (max-width: 414px)
{
  #s{
    margin-left: 45px;
    width: 71%;
  }

  .flex-container{
    max-width: 80%;
  }

  .menulink{
    display: none;
  }
    #mobilemenu{
    margin-left: 25px;
    margin-top: 10px;
    width: 84%;
    display: inline-flex;
  }
}

/* Pixel 2 & 2 XL */
@media screen and (max-width: 411px)
{
  #s{
    margin-left: 45px;
    width: 71%;
  }

  .flex-container{
    max-width: 80%;
  }

  .menulink{
    display: none;
  }
    #mobilemenu{
    margin-left: 45px;
    margin-top: 10px;
    width: 71%;
  }
}

/* iPhone 6/7/8 */
@media screen and (max-width: 375px)
{
  #s{
    margin-left: 30px;
    width: 80%;
    border-radius: 30px;
    border: 2px solid #f4f4f4;
    background-image: url('img/searchicon.png');
    background-position: 8px 4px;
    background-repeat: no-repeat;
    padding:4px 0px 4px 40px
  }
  .flex-container{
    max-width: 89%;
  }

  .menulink{
    display: none;
  }
  
  #mobilemenu{
    display: inline-flex;
    margin-left: 25px;
    margin-top: 10px;
    width: 84%;
  }
}

/* Galaxy S5 */
@media screen and (max-width: 360px)
{
  
  #s{
    margin-left: 25px;
    width: 84%;
    border-radius: 30px;
    border: 2px solid #f4f4f4;
    background-image: url('img/searchicon.png');
    background-position: 8px 4px;
    background-repeat: no-repeat;
    padding:4px 0px 4px 40px
  }

  .menulink{
    visibility: hidden;
  }

  #mobilemenu{
    margin-left: 25px;
    margin-top: 10px;
    width: 84%;
  }

}

.navel{
  margin-left: 156px;
}

.slider-desc{
  word-wrap: break-word;
}
