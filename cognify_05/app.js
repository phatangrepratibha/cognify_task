const express=require('express');

var bodyParser = require('body-parser')

const app=express();
app.use(bodyParser.urlencoded({extended:true}));
// app.use(bodyParser.json());
app.use(express.json());

app.use(express.static('public'));

app.get("/",(req,res)=>{
    res.sendFile(__dirname+"/index.html");
});

// app.post("/",(req,res)=>{
//    res.json("1] First Name is  :"+  req.body.fname  +"   2]   " +  "Last Name is  :"  +  req.body.lname );  
    
// });
app.post("/", (req, res) => {
    const {username , email,password,phone,address } = req.body;
    res.json({
        message: ` UserName is: ${username}, Email is: ${email} , Password is :${password} , Contact is :${phone} , Address is :${address}`
    });
});

app.put("/",(req,res)=>{
   
     res.send("Put Request Received!!!");
});

app.delete("/",(req,res)=>{

     res.send("Delete Request Received!!!");
});

app.use((err, req, res, next) => {
    console.error(err.stack);
    res.status(3000).send('Something broke!');
});

app.listen(3000,()=>{
    console.log("server is running");
});


