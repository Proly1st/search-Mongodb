$(function () {
    $('.input-search').on('input',function (){
        // console.log($('.input-search').val())
        axios({
            'method':'GET',
            'url':'search-people',
            params:{
                'keyword': $('.input-search').val()
            }
        }).then(function (response){
            if(response.data.status===200){
                let data='';
                for (const s of response.data.data){
                    data+=` <ul class="search-item">
                            <a href="">${s.name}</a>
                        </ul>`

                }
                $('.search-recommend').html(data);
                console.log(response.data.data);
            }else{
                console.log(response.data.message);
            }
        })
    })



})


