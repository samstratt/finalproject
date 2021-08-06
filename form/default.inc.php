<style type="text/css" >
*{
  margin: 0;
  padding: 0;
  border: 0;
}

body{
  background-color: #080001;
  color: #FFFCFC;
}

h1, h2, h3, ul a{
  font-family: "forma-djr-micro", "sans-serif";
  font-weight: 700;
  font-style: normal;
  color: #FFFCFC;
}

p{
  font-family: "forma-djr-micro", "sans-serif";
  font-weight: 400;
  font-style: normal;
}

ul{
  list-style-type: none;
}

a{
  text-decoration: none;
}

li a:hover{
  color: #FF001E;
}

li a:active{
  color: #BF061C;
}

.current{
  color: #BF061C;
}

/*Header (There are two different styles of Header)*/

header{
  height:120px
}


header nav li{
  display: inline-block;
  font-size: 20px;
}

.main-nav{
  margin:50px;
}

.main-nav li{
  margin-right: 50px;
}

.main-nav-img{
  margin: 50px;
  float: right;
}

.main-nav-img li{
  margin-left: 50px;
}

.header-logo{
  vertical-align: middle;
  max-width: 100px;
  margin-left: 50px;
  margin-top: 10px;
}

/*Footer*/

footer{
  height: 220px;
}

.foot-nav{
  font-size: 30px;
  line-height: 50px;
  margin:20px 50px;
  height: 220px;
  float: left;
}

form{
  max-width: 600px;
  height: 220px;
  font-family: "forma-djr-micro", "sans-serif";
  font-weight: 700;
  font-style: normal;
  color: #FFFCFC;
  float: right;
  margin: 20px 50px;
}

.label-input-wrap{
  display: block;
  font-size: 30px;
}

textarea{
  height:100px;
  width: 500px;
  background: #FFFCFC;
  color: #080001;
  border-radius: 10px;
  margin: 5px 0px;
  padding: 5px;
  font-family: "forma-djr-micro", "sans-serif";
  font-weight: 400;
  font-style: normal;
  font-size: 15px;

}

.submit input{
  background: #EBE8E7;
  font-family: "forma-djr-micro", "sans-serif";
  font-weight: 700;
  font-style: normal;
  font-size: 25px;
  color: #706C6B;
  padding: 5px 10px;
  border-radius: 10px;
  float: right;
}
</style>

    <header>

      <nav class="main-nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="bios.html">Bios</a></li>
          <li><a href="pod.html">Podcast</a></li>
        </ul>
      </nav>

    </header>

    <main>

      <h1>Oh No!</h1>

      <p>Sorry, something went wrong! Please try submitting the form again.</p>

    </main>

    <footer>

      <nav>
        <ul class="foot-nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="bios.html">Bios</a></li>
          <li><a href="pod.html">Podcast</a></li>
        </ul>
      </nav>

      <form id="contact-us" name="contact-us" method="post" action="form.php" onsubmit="return validateForm(this)">
        <div class="contact-us">

          <label for="contact-us" class="label-input-wrap">Contact Us:</label>

          <textarea name="contact" id="contact" placeholder="Include your name and email in your message..."></textarea>
        </div>

        <div class="submit">

          <input type="submit" value="Send" />
        </div>

      </form>

    </footer>
