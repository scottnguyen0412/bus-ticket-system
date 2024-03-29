<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bree+Serif&family=EB+Garamond:ital,wght@0,500;1,800&display=swap');
        body {
        background: #DFC2F2;
            background-image: linear-gradient( to right, #ffffb3,#ffe6e6);
            background-attachment: fixed;	
            background-size: cover;
        
            }

        #container{
            box-shadow: 0 15px 30px 1px grey;
            background: rgba(255, 255, 255, 0.90);
            text-align: center;
            border-radius: 5px;
            overflow: hidden;
            margin: 5em auto;
            height: 350px;
            width: 700px;
        
            
        }
        .product-details {
            position: relative;
            text-align: left;
            overflow: hidden;
            padding: 30px;
            height: 100%;
            float: left;
            width: 40%;
        }
        #container .product-details h1{
            font-family: 'Bebas Neue', cursive;
            display: inline-block;
            position: relative;
            font-size: 30px;
            color: #344055;
            margin: 0;
            
        }
        #container .product-details h1:before{
            position: absolute;
            content: '';
            right: 0%; 
            top: 0%;
            transform: translate(25px, -15px);
            font-family: 'Bree Serif', serif;
            display: inline-block;
            background: #ffe6e6;
            border-radius: 5px;
            font-size: 14px;
            padding: 5px;
            color: white;
            margin: 0;
            animation: chan-sh 6s ease infinite;

        }



            


        .hint-star {
            display: inline-block;
            margin-left: 0.5em;
            color: gold;
            width: 50%;
        }


        #container .product-details > p {
        font-family: 'EB Garamond', serif;
            text-align: center;
            font-size: 18px;
            color: #7d7d7d;
            
        }
        .control{
            position: absolute;
            bottom: 20%;
            left: 22.8%;
            
        }
        .btn {
            transform: translateY(0px);
            transition: 0.3s linear;
            background:  #809fff;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            outline: none;
            border: none;
            color: #eee;
            padding: 0;
            margin: 0;
            
        }

        .btn:hover{transform: translateY(-6px);
            background: #1a66ff;
        }
        .btn span {
            font-family: 'Farsan', cursive;
            transition: transform 0.3s;
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.2em;
            margin:0;
            
        }
        .btn .buy {z-index: 3; font-weight: bolder;}
        .product-image {
            transition: all 0.3s ease-out;
            display: inline-block;
            position: relative;
            overflow: hidden;
            height: 100%;
            float: right;
            width: 45%;
            display: inline-block;
        }
        #container img {width: 100%;height: 100%;}
    </style>
<head>
<body>
    <div id="container">	
        <div class="product-details">
        <h1>Dear Mr.{{$user->name}}</h1>
            <p class="information">Here is your password: {{$password}}</p>
            <p class="information">Your Account Role: {{$user->role->name}}</p>
        </div>
        <div class="product-image">
            <img src="https://images.pexels.com/photos/1652394/pexels-photo-1652394.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
        </div>
    </div>
</body>

