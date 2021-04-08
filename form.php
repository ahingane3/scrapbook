<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box
        }
        
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial;
        }
        
        .tablink {
            background-color: rgb(255, 255, 255);
            color: rgb(27, 18, 18);
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 20px 16px;
            font-size: 32px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: bold;
            width: 33.33%;
        }
        
        .tablink:hover {
            background-color: rgba(128, 121, 121, 0.356);
        }
        
        .tabcontent {
            color: rgba(128, 121, 121, 0.356);
            display: none;
            padding: 100px 20px;
            height: 100%;
        }
        
        #Personal_Detail {
            background-color: rgba(128, 121, 121, 0.356);
        }
        
        #Education {
            background-color: rgba(128, 121, 121, 0.356);
        }
        
        #Add_Image {
            background-color: rgba(128, 121, 121, 0.356);
        }
        
        input {
            background-color: rgba(128, 121, 121, 0.356);
            width: 500px;
            height: 30px;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            text-transform: capitalize;
            margin-left: 200px;
        }
        
        button {
            font-family: 'Times New Roman', Times, serif;
        }
        
        button:hover {
            background-color: rgb(94, 92, 92);
        }
    </style>
</head>

<body>

    <button class="tablink" onclick="openPage('Personal_Detail', this, 'gray')" id="defaultOpen">Personal Detail</button>
    <button class="tablink" onclick="openPage('Education', this, 'gray')">Education</button>
    <button class="tablink" onclick="openPage('Add_Image', this, 'gray')">Add Image</button>

    <div id="Personal_Detail" class="tabcontent">
        <form style="font-size: 24px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black; ">
            1. First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Name"><br><br> 2. Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Sername"><br><br>            3. Phone no.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" placeholder="xxx-xxx-xxxx"><br><br> 4.Whatsapp no.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" placeholder="xxx-xxx-xxxx"><br>            <br> 5. Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" placeholder=" xyz......"><br><br> 6. Date of BIRTH&nbsp;&nbsp;
            <input type="date"><br><br> 7. Portfolio Link&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder=""><br><br> 8. Website&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text">
            <br><button style="width: 120px;height: 40px; font-size: 28px; margin: 20px 700px ;">Submit</button>
        </form>
    </div>

    <div id="Education" class="tabcontent">

        <form style="font-size: 24px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: black; ">
            1. Course/Degree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Coure/Degree"><br><br> 2. Name of Institution&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Name"><br><br>            3. Grade/Score&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" placeholder="xxx"><br><br> 4.Passing Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" placeholder="xxxx"><br> <br><br><br><br>
            <button style="width: 120px;height: 40px; font-size: 28px; margin: 20px 700px ;">Submit</button>
        </form>
    </div>

    <div id="work_experience" class="tabcontent">
        <p>Get in touch, or swing by for a cup of coffee.</p>
    </div>

    <script>
        function openPage(pageName, elmnt, color) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].style.backgroundColor = "";
            }
            document.getElementById(pageName).style.display = "block";
            elmnt.style.backgroundColor = color;
        }

        document.getElementById("defaultOpen").click();
    </script>

</body>

</html>