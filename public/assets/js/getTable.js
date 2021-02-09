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
  

  

    window.onload = selectData;
    // var dbName=0;
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
        
        function AddItemsToPage(name,date,pregWeeks,subject,findings)
        {
            var root=document.getElementById('patients');

            var trow=document.createElement('tr');
            var nameInfo=document.createElement('td');
            var dateInfo=document.createElement('td');
            var weeksInfo=document.createElement('td');
            var subjectInfo=document.createElement('td');
            var messageInfo=document.createElement('td');
          
    
            // nameInfo.innerHTML =++dbName;
            nameInfo.innerHTML=name;
            dateInfo.innerHTML =date;
            weeksInfo.innerHTML =pregWeeks;
            messageInfo.innerHTML =findings;
            subjectInfo.innerHTML =subject;
            
    
    
            trow.appendChild(nameInfo);
            trow.appendChild(dateInfo);
            trow.appendChild(weeksInfo);
            // trow.appendChild(subjectInfo);
            trow.appendChild(messageInfo);
            root.appendChild(trow);
    
    
    
        }
