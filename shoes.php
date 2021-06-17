<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Comfy Slides
      </div>
      <div id="author">
        Leslie Lewis | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg" >
      <img src="./img/splash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>
        Ever since my mother moved in with us, I’ve been on my feet a lot more. 
        She requires a lot of in-home care ever since she hurt her back 
        (she’s in her mid seventies, and I refused to send her to a home) and 
        I’ve been trying to make her comfortable as I settle in to my new role 
        as a caregiver. I figured, you know, this woman brought me into this 
        world and took care of me for 17 years, the least I can do is try to provide 
        return the favor as she’s in her twilight years.
      </p>

      <p>
        I love my mother, but being on my feet all day was 
        starting to take its toll on me.
      </p>

      <p>
        I’m over the hill myself—not a complaint, just an observation—so I’ve got experience with raising my own kids, 
        but I thought I was kind of done with the cooking three times a day and spending a 
        lot of time in the kitchen until I brought my mother into my home. 
        My husband’s retired now, but he’s worked with the railroad union for over 
        thirty years and his body’s pretty beat down.
      </p>

      <p>
        I got Mom to sleep one evening and was sitting on the couch, rubbing my stiff 
        and sore feet, when my husband noticed how much pain I was in. He asked me if 
        I tried some insoles for my shoes, or if I wanted an appointment with a doctor. 
        I told him no, that I was fine, and that was that.
      </p>

	<div class="articleImgsmall" style="width:40%;">
      <img src="./img/problem.jpg" width="100%" />
      </div>

      <p>Of course, I wasn’t fine, but I didn’t want him worrying about me.</p>

      <p>
        That’s when I called up one of my girl friends and we started catching up on things. 
        I was telling her about how my aches and pains have gotten worse from being on my feet all day long 
        when she gave me a great suggestion.
      </p>

      <div class="blockQuote">
            <i>
            “You know how I have bad knees? I found these new pillow slides, they’re called 
            <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> . 
            I’ve been wearing them all day for weeks now, and they’re the best money I ever spent on shoes. 
            They’re so comfortable, they literally feel like pillows for your feet, and they look great. 
            I wore them for my husband’s birthday, when he had all his friends over and I did that catering thing, 
            remember? I think I was on my feet for like 10 hours that day, and I didn’t have any knee pain at all. 
            Girl, you have got to try these. Get on their website and check them out!”
            </i>
      </div>

      <p>That was enough for me: I decided to do some research into [Product Name].</p>

      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall">
      <img src="./img/product.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>
      <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> is more than just a stylish pair of slides; 
        these are the ultimate footwear design for all-day comfort that 
        relieves the strain on hips, legs, ankles and feet. Experiencing 
        pain from high arch, plantar fasciitis, flat feet, knee pain, overpronating, 
        bunions, or just have extended periods standing or walking throughout the day? 
        Slide your feet onto these pillows and you’ll be walking on Cloud Nine!
      </p>

      <p>
        The benefit of [Product Name] is in the ergonomic design: the toe-to-tail is angled at 15 degrees 
        to balance the pressure from your feet all the way up to your hips, which correctly distributes your 
        body weight across the ultra thick, therapeutic sole for maximum relaxation. A great way to relieve stiff 
        joints, sore feet, and keep you going pain-free during long days.
      </p>

      <p>
        Take the strain off your feet and your wallet and get the best of both worlds: an affordable, 
        comfortable and stylish pair of slides that provide the best long-term comfort.
      </p>
    </div>
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>
        So far, the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> has sold over 5 million units directly to consumers, 
        even without the help of being sold in stores. The [Product Name] has been SELLING OUT 
        every time new stock becomes available, it’s become THAT popular.
      </p>

      <p>
        And, it’s all from word of mouth. People just like you are loving it so much that they’re posting 
        about it on instagram and telling everyone they know about it!
      </p>
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igpost.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall" style="width:60%;">
      <img src="./img/igpost2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>
        The <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> has started to develop a cult following, and with over 10,000 5-star reviews, 
        it makes sense. Here’s what customers are saying about it:
      </p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Mary L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/2/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      Got these in pale yellow in hopes of relieving my heel pain 
      while standing in my kitchen cooking all day! I was skeptic at first but I tried them. Absolutely love them, problem solved. My
      feet feel great and comfortable all day.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Harvey A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/5/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      At first I had some pretty bad foot pain. After I bought these guys my heels/feet feel so much better from standing all day! Very comfortable! Would definitely recommend. These are my go to slippers in the house!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Esmeralda C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        6/12/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      These fit perfectly! I’ve had them for 2 weeks thus far. They’re comfortable and easy for me to walk in. I’m having difficulty wearing reg normal shoes since my last surgery to my ankle and foot. After
      wearing them for so long my ankle and foot are much stronger. It feels good to walk on grass with these. Something I cannot do with regular shoes.
      </div>
    </div>
    <div class="articleText">
      <p>
        I was overwhelmed by how many positive reviews [Product Name] had accumulated in such a short time, 
        and with the recommendation from my girl friend, I knew I had to try a pair for myself. 
        I got on the <a class="articleLink" href="<?=$exitLink;?>">official website</a> and one the moment they came back in stock.
      </p>
    </div>
    <div class="articleSubheader">
      …Here’s What I Found.
    </div>
    <div class="articleText">
      <p>The <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> arrived in just 2 days. I didn’t expect them here so quick!</p>

      <div class="articleImg" style="width:60%;">
        <img src="./img/unboxing.jpg" width="100%" />
      </div>

	  <p>
        I unboxed them and slid my feet in right away. The first thing I noticed was how soft 
        and comfortable they were. It’s one thing to say they’re comfortable—feeling it is a whole other level. 
        My sore feet were practically singing with relief…it was like finding an oasis in the desert, 
        and I’m not being dramatic. The instantaneous difference in my feet was a welcome relief.
      </p>

      <div class="articleImg" style="width:60%;">
        <img src="https://media0.giphy.com/media/hKBGqmAT7NImiVmfjj/giphy.gif" width="100%" />
      </div>

      <p>
        They fit my feet perfectly, and they’re slides, so it’s just slide in, kick off, that easy. 
        I was standing with confidence and when I walked around for a few minutes, I actually felt like 
        some of the weight was taken off my knees, too. Did I mention how great the [Product Name] feels? 
        Like my girl friend said, they were like standing on pillows!
      </p>

      <p>
        Over the course of the next few days of looking after my mother while I was wearing the <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a>, 
        my feet weren’t hurting at all. I was amazed. Not only did the [Product Name] help my pain, it worked FAST. 
        I was pleased beyond words to be able to focus more on my mom and less on myself.
      </p>

      <p>
        After using <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> every day for a few months now, I couldn’t be happier. 
        These inexpensive slides hold up great; after constant use, they’re showing no signs 
        of wearing and tear. I’ve had a life-changing experience with [Product Name]. 
        It may seem like a small thing, but the convenience and comfort I thought I’d aged myself 
        out of has returned in full swing. [Product Name] has saved me a lot of stress, pain, and money. 
        I can’t recommend them enough!
      </p>
    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at their official website for just $19.99!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	
        It is absolutely worth it. Ever since I purchased <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> from the official website, 
        my feet don’t get sore from standing and walking for extended periods of time, and the strain in my 
        knees has considerably lessened.
      </p>

      <p>
        I honestly don’t know how I’d make it through a long day on my feet without [Product Name]. I bought a few more pairs from the website so my mother and husband could have their own pairs, and they’re loving them! I also got a separate pair for when I go outside to check the mail so I don’t dirty up my carpet. 
        I just wish I would have found out about [Product Name] sooner!
      </p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">[Product Name]</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 5 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
