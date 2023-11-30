document.addEventListener("DOMContentLoaded", function() {

    let divFibonacci = document.getElementsByClassName('fibonacci')[0];
    let inputFibonacci = document.getElementsByClassName('fibonacci__input')[0];
    let ulFibonacci = document.getElementsByClassName('fibonacci__ul')[0];

    inputFibonacci.addEventListener("keypress", function(event) {
        if (event.key === 'Enter') {

            //чистка
            ulFibonacci.replaceChildren();
            
            if (document.getElementsByClassName('fibonacci__p--red')[0]) {
                document.getElementsByClassName('fibonacci__p--red')[0].remove();
            }

            $.ajax({
                url: '/backend.php',
                method: 'post',
                dataType: 'json',
                data: {rowLenth: inputFibonacci.value},
                success: function(data) {

                    const lenthFibonacci = Object.keys(data['message']).length;

                    if (data['status'] == false) {

                        let error = document.createElement('p');
                        error.id = "fibonacci__p--red";
                        error.className = "fibonacci__p--red";
                        error.innerHTML = data['message'];
                        inputFibonacci.after(error);
                    } else {
                        for (let i = 0; i < lenthFibonacci; i++) {
                            let li = document.createElement('li');
                            if ((i+1) % 2 == 0) {
                                li.className = "fibonacci__li--blue";
                            } else {
                                li.className = "fibonacci__li--red";
                            }
                            li.innerHTML = data['message'][i];
                            ulFibonacci.append(li);

                            ulFibonacci.childNodes[i].addEventListener("mouseover", function() {
                                console.log(this.innerHTML);
                            });
                        }
                    }
                }
                
            });
        }
    });
});