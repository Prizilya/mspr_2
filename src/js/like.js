document.addEventListener('DOMContentLoaded', function () {
    let elements = document.querySelectorAll('.btn');

    elements.forEach(element => {

        element.addEventListener('click', function () {

            let publishId = this.getAttribute('data-publish-id')

                if (  element.style.backgroundColor === 'grey') {
                    element.style.backgroundColor = 'green'
                }


            });


        });
});