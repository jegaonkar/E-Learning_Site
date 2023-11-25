<html>
  <head>
    <title>Codopedia Python (Introduction)</title>
    <link rel="stylesheet" href="..\css\page.css" />
    <link rel="stylesheet" href="..\css/font/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="..\css/about.css" />
    <style>

		
      #name {
       
       font-size: 25px;
         width: 25%; 
         padding: 10px;
      }
     
      #email {
       
       font-size: 25px;
         width: 25%; 
         padding: 10px;
      }
         h2 {
           color: white;
           margin-bottom: 10px;
           
           
         }
         
         input[type="radio"] {
           margin-right: 10px;
           transform: scale(2.1);
           
           
         }
         
         input[type="submit"] {
           display: block;
           width: 5%;
           margin-top: 20px;
           background-color: #4CAF50;
           color: white;
           padding: 10px;
           border: none;
           cursor: pointer;
           text-align: center;
           font-size: 20px;
         }
         
         input[type="submit"]:hover {
           background-color: #45a049;
         }
     
         </style>
  </head>
  <body id="body">
    <div class="menubar">
      <div id="mheading">
        <h1>
          Codo
          <span>pedia</span>
          .com
        </h1>
      </div>
      <a href="contact.html">Contact</a>

      <a href="m5.html"class="active">About</a>

      <a href="m4.html">News</a>

      <a href="m3.html">Plus Members</a>

      <a href="index.html">Home</a>
    </div>

    <span class="mid">
      <main>
        
          <p id="content_heading">Assesment </p>
          <div id="content_text">
            <form action="..\data\result_c.php" method="post"> <br>
              <label for="name">Name:</label> <br>
              <input type="text" id="name" name="name" placeholder="Enter your full name"><br><br>
          
              <label for="email">Email:</label> <br>
              <input type="email" id="email" name="email" placeholder="Enter your Registered email id"><br><br>
          
              <h2>*Minimum passing marks are 7*</h2> 
          
              
                   
              <h2>Q.1)What is the symbol used for a single-line comment in C?</h2>
              <input type="radio" name="q1" value="a">a)  //<br> 
              <input type="radio" name="q1" value="b">b) /*<br>
              <input type="radio" name="q1" value="c">c) #<br>
              <input type="radio" name="q1" value="d">d)  %%<br>
              
          
              <h2>Q.2)Which of the following is NOT a valid variable name in C?</h2>
              <input type="radio" name="q2" value="a">a)  myVariable<br>
              <input type="radio" name="q2" value="b">b) _myVariable<br>
              <input type="radio" name="q2" value="c">c) 2myVariable<br>
              <input type="radio" name="q2" value="d">d)  my_Variable<br>
          
              <h2>Q.3) What is the output of the following code snippet?</h2><br>
              <pre>#include < stdio.h>
int main() {
    int x = 5;
    printf("%d", x++);
    return 0;
}</pre> <br>
              <input type="radio" name="q3" value="a">a) 5<br>
              <input type="radio" name="q3" value="b">b) 6<br>
              <input type="radio" name="q3" value="c">c) 4<br>
              <input type="radio" name="q3" value="d">d) Undefined behavior <br>
          
              <h2>Q.4)What does the sizeof() operator return in C?</h2>
              <input type="radio" name="q4" value="a">a) Size of a variable<br>
              <input type="radio" name="q4" value="b">b) Size of a datatype<br>
              <input type="radio" name="q4" value="c">c)  Size of a function<br>
              <input type="radio" name="q4" value="d">d) Size of a pointer <br>
          
          
              <h2>Q.5) Which function is used to allocate memory dynamically in C?</h2>
              <input type="radio" name="q5" value="a">a) malloc()<br>
              <input type="radio" name="q5" value="b">b) calloc()<br>
              <input type="radio" name="q5" value="c">c)  realloc()<br>
              <input type="radio" name="q5" value="d">d) All of the above <br>
          
              <h2>Q.6) What is the purpose of the scanf() function in C?</h2>
              <input type="radio" name="q6" value="a">a) Open a file<br>
              <input type="radio" name="q6" value="b">b) Allocate memory<br>
              <input type="radio" name="q6" value="c">c) Read formatted input<br>
              <input type="radio" name="q6" value="d">d) Print formatted output <br> 
              
              <h2>Q.7)  What will be the value of x after the following code is executed?</h2><br>
              <pre>int x = 10;
x = x << 1;
</pre> <br>
              <input type="radio" name="q7" value="a">a) 5 <br>
              <input type="radio" name="q7" value="b">b) 20<br>
              <input type="radio" name="q7" value="c">c)  10<br>
              <input type="radio" name="q7" value="d">d) 40<br>
          
          
              <h2>Q.8) Which loop in C is used to execute a block of code at least once?</h2>
              <input type="radio" name="q8" value="a">a)  for loop<br>
              <input type="radio" name="q8" value="b">b) do-while loop<br>
              <input type="radio" name="q8" value="c">c) while loop<br>
              <input type="radio" name="q8" value="d">d)  None of the above <br>
          
              <h2>Q.9) What does the strcmp() function in C do?</h2>
              <input type="radio" name="q9" value="a">a) Compares two strings<br>
              <input type="radio" name="q9" value="b">b) Copies one string to another<br>
              <input type="radio" name="q9" value="c">c)  Concatenates two strings<br>
              <input type="radio" name="q9" value="d">d) Finds the length of a string <br>
          
          
              <h2>Q.10) What is the escape sequence for a new line in C?</h2>
              <input type="radio" name="q10" value="a">a) \n<br>
              <input type="radio" name="q10" value="b">b) \t<br>
              <input type="radio" name="q10" value="c">c) \r<br>
              <input type="radio" name="q10" value="d">d) \l <br>
          
               
          
          
          
              <input type="submit" value="Submit">
          
              
            
            </form>
             
      </main>
    </span>

    <footer class="footer-distributed">
      <div class="footer-left">
 <a href="../index.php">	<h3>Codo<span>pedia</span>.com</h3></a> <br>
        <br />
        <a href="log.html">
          <button class="login_singup_btn">Login/Signup</button>
        </a>
        <br />
        <a href="https://www.facebook.com/codopedia1/" target="_blank">
          <i class="fab fa-facebook-square"></i>
        </a>
        <a href="https://twitter.com/Codopedia1" target="_blank">
          <i class="fab fa-twitter-square"></i>
        </a>
        <a href="https://www.instagram.com/codopedia1/" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </div>

      <div class="footer-center">
        <div></div>

        <div>
          <p>+91-7775938882</p>
        </div>

        <div>
          <p><a href="mailto:support@company.com">codopedia@gmail.com</a></p>
        </div>
      </div>

      <div class="footer-right">
        <p class="footer-right-heading">
          <span>Feedback</span>
        </p>
        <div class="footer-input-box">
          <input class="ebox" type="text" placeholder="Enter E-mail ID..." />
          <br />
          <input class="cbox" type="text" placeholder="Comment..." />
          <a href="submit.html">
            <input class="button" type="button" value="Submit" />
          </a>
        </div>
      </div>
    </footer>
  </body>
</html>
