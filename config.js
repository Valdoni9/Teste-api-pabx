function fazGet(url) {
    let request = new XMLHttpRequest();
    request.open("GET", url, false);
    request.send();
    return request.responseText;

}

function criaLinha(usuario) {

}

function main() {
    data = fazGet("http://192.168.1.210:4444/cgi-bin/nip-api2");
    usuarios = JSON.parse(data);
    console.log(usuarios);
}

main();