// Initialize Firebase (ADD YOUR OWN DATA)

var config = {
    apiKey: "AIzaSyDUAJj0aCxMq-IEyEIEGCycyZb1x8O3V1c",
    authDomain: "finalyearproj-90a63.firebaseapp.com",
    databaseURL: "https://finalyearproj-90a63-default-rtdb.firebaseio.com",
    projectId: "finalyearproj-90a63",
    storageBucket: "finalyearproj-90a63.appspot.com",
    messagingSenderId: "70010473764"
  };

  firebase.initializeApp(config);
  
  // Reference messages collection
  var messagesRef =firebase.database().ref('medicalRecords');
  
  // Listen for form submit
  document.getElementById('contactForm').addEventListener('submit', submitForm);
  
  // Submit form
  function submitForm(e){
    e.preventDefault();
  
    // Get values
    var name = getInputVal('name');
    var date = getInputVal('date');
    var weeks=getInputVal('pregWeeks');
    var subject = getInputVal('subject');
    var findings = getInputVal('findings');
    
  
    // Save message
    saveMessage(name, date,weeks, subject, findings);
  
    // Show alert
    document.querySelector('.alert').style.display = 'block';
  
    // Hide alert after 3 seconds
    setTimeout(function(){
      document.querySelector('.alert').style.display = 'none';
    },3000);
  
    // Clear form
    document.getElementById('contactForm').reset();
  }
  
  // Function to get get form values
  function getInputVal(id){
    return document.getElementById(id).value;
  }
  
  // Save message to firebase
  function saveMessage(name, date,weeks, subject, findings){
    var newMessageRef = messagesRef.push();
    newMessageRef.set({
      Name: name,
      Date:date,
      PregnancyWeeks:weeks,
      Subject:subject,
    
      Findings:findings
    });
  }


//   var link = document.createElement('link');

//   link.rel='stylesheet';
//   link.type='text/css';
//   link.href='style-starter.css';

  
  //get data from firebase
//   messagesRef.on("value", function(snapshot){
//     snapshot.forEach(function(element)
//     {
//         document.querySelector('#root').innerHTML += `
//         <div>${element.val().email}</div>
//         <div>${element.val().name}</div>

        
        
//         `
//     });

// })
    function selectData(){
    messagesRef.on('value',function(AllRecords)
    
    {
        AllRecords.forEach(
            function(currentRecord)
            {
                var name=currentRecord.val().Name;
                var date=currentRecord.val().Date;
                var pregWeeks=currentRecord.val().PregnancyWeeks;
                var subject=currentRecord.val().Subject;
                var findings=currentRecord.val().Findings;
                AddItemsToPage(name,date,pregWeeks,subject,findings);

            }
        );
    });

    }

    window.onload = selectData;
    // var dbName=0;
    function AddItemsToPage(name,date,pregWeeks,subject,findings)
    {
        var root=document.getElementById('root');
        var nameInfo=document.createElement('h2');
        var dateInfo=document.createElement('p');
        var weeksInfo=document.createElement('p');
        var messageInfo=document.createElement('p');
        var subjectInfo=document.createElement('h4');

        // nameInfo.innerHTML =++dbName;
        nameInfo.innerHTML=name;
        dateInfo.innerHTML =date;
        weeksInfo.innerHTML =pregWeeks;
        messageInfo.innerHTML =findings;
        subjectInfo.innerHTML =subject;
        


        nameInfo.appendChild(dateInfo);
        nameInfo.appendChild(weeksInfo);
        nameInfo.appendChild(subjectInfo);
        nameInfo.appendChild(messageInfo);
        root.appendChild(nameInfo);



    }

    
    // var data=snapshot.val();
    // for(let i in data)
    // {
    //     console.log(data[i]);
    // }



  