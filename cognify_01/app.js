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
    const { fname, lname,email,password,gender} = req.body;
    res.json({
        message: `First Name is: ${fname}, Last Name is: ${lname} , Email is:${email} , Password is :${password} , Gender is :${gender}`
    });
});



app.listen(3000,()=>{
    console.log("server is running");
});


