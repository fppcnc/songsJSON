class Song {
    constructor(id, title, singer) {
        this.id = id;
        this.title = title;
        this.singer = singer;
    }
}

const sendAjax = () => {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // parse the php string contained in "this.responseText" to a JSON array
            const songs = JSON.parse(this.responseText);
            let content = '';
            // for loop to go through all elements in array and print 1 for each line
            for (let i=0; i < songs.length; i++){
                content += songs[i].id+' '+songs[i].title+' '+songs[i].singer+'<br>';
            }
            document.getElementById("result").innerHTML = content;
        }
    };
    xhttp.open("POST", "ajax.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
}

// event onclick for the button im index.php which redirects here
document.getElementById('btn1').addEventListener('click', sendAjax);