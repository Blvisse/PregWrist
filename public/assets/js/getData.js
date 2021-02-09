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
        
    messagesRef.orderByChild("Name").limitToLast(1).once("value",function(AllRecords)
    {
        
        AllRecords.forEach(
                 function(currentRecord)
                 {
                    var name=currentRecord.val().Name;
                    var date=currentRecord.val().Date;
                    var pregWeeks=currentRecord.val().PregnancyWeeks;
                    var subject=currentRecord.val().Subject;
                    var findings=currentRecord.val().Findings;
                    AddItemsToCard(name,date,pregWeeks,subject,findings);
                    
                })
    //    console.log(snapshot.val());
    });
        }
    
        window.onload = selectData;
        


        function AddItemsToCard(name,date,pregWeeks,subject,findings)
        {
            var root=document.getElementById('patientData');

            // var trow=document.createElement('');
            var nameInfo=document.createElement('h2');
            // nameInfo.setAttribute(, );
            var dateInfo=document.createElement('p');
            dateInfo.setAttribute("class","mb-lg-5 mb-4");
            var weeksInfo=document.createElement('p');
            weeksInfo.setAttribute("class","mb-lg-5 mb-4");
            var subjectInfo=document.createElement('h4');
            
            var messageInfo=document.createElement('p');
            
          
    
            // nameInfo.innerHTML =++dbName;
            nameInfo.innerHTML=name;
            dateInfo.innerHTML =date;
            weeksInfo.innerHTML =pregWeeks;
            messageInfo.innerHTML =findings;
            subjectInfo.innerHTML =subject;
            
    
    
            
            nameInfo.appendChild(dateInfo);
            nameInfo.appendChild(weeksInfo);
            // trow.appendChild(subjectInfo);
            nameInfo.appendChild(messageInfo);
            root.appendChild(nameInfo);
    
    
    
        }


        function AddVitalstoCard(vitals,timestamp)

        {
            var rootVital=document.getElementById('vitalCards');
            var vitalReading=document.createElement('h5');
            vitalReading.setAttribute("class","w3l-stats-txt");
            var timeStamp=document.createElement('h5');
            timeStamp.setAttribute("class","w3l-stats-txt");

            rootVital.innerHTML=vitals;
            timeStamp.innerHTML=timestamp;


            rootVital.appendChild(vitalReading);
            rootVital.appendChild(timeStamp);


        }


        
        var messagesRef2 =firebase.database().ref('timestamped_measures');


    // var dbName=0;
    function selectData2(){
        
    messagesRef2.orderByChild("value").limitToLast(1).once("value",function(AllRecords)
    {
        
        AllRecords.forEach(
                 function(currentRecord)
                 {
                    var vals=currentRecord.val().value;
                    var timeS=currentRecord.val().timestamp;
                    
                    AddVitalstoCard(vals,timeS);

                    console.log(currentRecord.val());
                    
                })
    //    console.log(snapshot.val());
    });
        }





        

       


       
        

        const nbOfElts = 500;

        // The big picture: EACH TIME A VALUE CHANGES in the 'timestamped_measures' node, e.g.
        // when a new timestamped measure has been pushed to that node,
        // we make an array of the last 'nbOfElts' timestamps
        // and another array of the last 'nbOfElts' luminosity values.
        // This is because plotly.js, our plotting library, requires arrays of data, one for x and one for y.
        // Those sliding arrays produce a live data effect.
        // -----
        // See https://firebase.google.com/docs/database/web/lists-of-data for trigger syntax:
        firebase.database().ref('timestamped_measures').limitToLast(nbOfElts).on('value', ts_measures => {
            // If you want to get into details, read the following comments :-)
            // 'ts_measures' is a snapshot raw Object, obtained on changed value of 'timestamped_measures' node
            // e.g. a new push to that node, but is not exploitable yet.
            // If we apply the val() method to it, we get something to start work with,
            // i.e. an Object with the 'nbOfElts' last nodes in 'timestamped_measures' node.
            // console.log(ts_measures.val());
            // => {-LIQgqG3c4MjNhJzlgsZ: {timestamp: 1532694324305, value: 714}, -LIQgrs_ejvxcF0MqFre: {…}, … }
        
            // We prepare empty arrays to welcome timestamps and luminosity values:
            let timestamps = [];
            let values = [];
        
            // Next, we iterate on each element of the 'ts_measures' raw Object
            // in order to fill the arrays.
            // Let's call 'ts_measure' ONE element of the ts_measures raw Object
            // A handler function written here as an anonymous function with fat arrow syntax
            // tells what to do with each element:
            // * apply the val() method to it to gain access to values of 'timestamp' and 'value',
            // * push those latter to the appropriate arrays.
            // Note: The luminosity value is directly pushed to 'values' array but the timestamp,
            // which is an Epoch time in milliseconds, is converted to human date
            // thanks to the moment().format() function coming from the moment.js library.    
            ts_measures.forEach(ts_measure => {
                //console.log(ts_measure.val().timestamp, ts_measure.val().value);
                timestamps.push(moment(ts_measure.val().timestamp).format('YYYY-MM-DD HH:mm:ss'));
                values.push(ts_measure.val().value);
            });
        
            // Get a reference to the DOM node that welcomes the plot drawn by Plotly.js:
            myPlotDiv = document.getElementById('myPlot');
        
            // We generate x and y data necessited by Plotly.js to draw the plot
            // and its layout information as well:
            // See https://plot.ly/javascript/getting-started/
            const data = [{
                x: timestamps,
                y: values,
                mode: 'lines',
                name: 'Pulse Reading',
                line:
                {
                    color: '#00FF00',
                    width:2
                }
            }];
        
            const layout = {
                title: '<b>Pulse Rate Monitor</b>',
                titlefont: {
                    family:  "Segoe UI", 
                    size: 16,
                    color: '#000'
                },
                xaxis: {
                    linecolor: 'black',
                    linewidth: 2
                },
                yaxis: {
                    title: '<b>Pulse</b>',
                    titlefont: {
                        family: 'Courier New, monospace',
                        size: 14,
                        color: '#000'
                    },
                    linecolor: 'black',
                    linewidth: 2,
                },
                margin: {
                    r: 50,
                    pad: 0
                }
            }
            // At last we plot data :-)
            Plotly.newPlot(myPlotDiv, data, layout, { responsive: true });
        });
        
        