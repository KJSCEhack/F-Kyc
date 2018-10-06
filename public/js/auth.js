
// Initialize Firebase
var config = {
    apiKey: "AIzaSyDD8fCrstay394K3l-isxX7s1tf3obzpqI",
    authDomain: "kjhack-218522.firebaseapp.com",
    databaseURL: "https://kjhack-218522.firebaseio.com",
    projectId: "kjhack-218522",
    storageBucket: "kjhack-218522.appspot.com",
    messagingSenderId: "722735509723"
};
firebase.initializeApp(config);
firebase.auth().languageCode = 'en';
const ref = firebase.storage().ref();
const firestore = firebase.firestore();
const settings = {timestampsInSnapshots: true };
firestore.settings(settings);

function f() {
    firestore.collection("users").onSnapshot(function(querySnapshot) {
        var content = '';
        querySnapshot.forEach(function(doc) {
            var uid = "'"+doc.id+"'";
            var val = doc.data();
            var ur =  "'"+val.MeetLink+"'";
            content += '<tr>';
            content += '<td>' + val.first_name +val.last_name + '</td>';
            content += '<td> <a class="btn chip waves-effect" onclick="poi('+uid+')">POI</a> </td>';
            content += '<td> <a class="btn chip waves-effect" onclick="poa('+uid+')">POA</a> </td>';
            if(val.TelVar == 0){
                content += '<td> <a class="btn chip waves-effect" onclick="invite('+uid+')">Send invite</a> </td>';
            }
            if (val.TelVar == 1){
                content += '<td> <a class="btn chip waves-effect" onclick="call('+uid +','+ ur+')">Call</a> </td>';
            }
            if(val.TelVar == 2) {
                content += '<td> <a class="btn chip waves-effect disabled">completed</a> </td>';
            }
            content += '</tr>';
        });
        $('#up').html(content);
    });
}

function invite(e) {
    $("#inviteModal").modal('open');
    var docRef = firestore.collection("users").doc(e);
    function a(){
        var link = $("#inviteLink").val();
        event.preventDefault();
        docRef.update({
            TelVar : '1',
            MeetLink : link
        })
            .then(function() {
                $("#inviteModal").modal('close');
            })
            .catch(function(error) {
                // The document probably doesn't exist.
                console.error("Error updating document: ", error);
            });
    }
    event.preventDefault();

    $("#inviteSubmit").click(a);

}

function call(e,u) {
    var docRef = firestore.collection("users").doc(e);
    return docRef.update({
        TelVar : '2',
        // MeetLink : link
    })
        .then(function() {
            alert("kindly copy the meet code\n"+u);
            poi(e);
            window.open("https://meet.google.com/","_blank");
        })
        .catch(function(error) {
            // The document probably doesn't exist.
            console.error("Error updating document: ", error);
        });
}

function poa(e) {
    firestore.collection("users").doc(e).collection('POA').onSnapshot(function(shot) {
        var conte = '';
        console.log(shot);
        $("#imgModal").modal('open');

        shot.forEach(function(doc) {
            var va = doc.data();
            console.log(va);
            conte+= '<img src="'+va.img1+'">';
            conte+= '<img src="'+va.img2+'">';

        });
        console.log(conte);
        $('#detail').html(conte);

    });
}
function poi(e) {
    firestore.collection("users").doc(e).collection('POI').onSnapshot(function(shot) {
        var conte = '';
        $("#imgModal").modal('open');

        shot.forEach(function(doc) {
            var va = doc.data();
            console.log(va);
            conte+= '<img src="'+va.img1+'">';
            conte+= '<img src="'+va.img2+'">';

        });
        console.log(conte);
        $('#detail').html(conte);

    });
}
// firestore.collection('users').doc(currentUID).set({
//     category : userCategory,
//     email : email,
//     name : company,
//     licenceNumber : licenceNumber,
//     phone :contactNumber,
//     logo : imageUrl
// }).then(function () {
//     // console.log('redirect');
//     pageRedirect(userCategory);
// });