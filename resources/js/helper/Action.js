class Action {
    store(url, data, method = 'post', object){
        axios({
            method: method,
            url: url,
            data: data
        }).then(function (response) {
            if (response.data.redirect_to) {
                location.href = response.data.redirect_to;
            }
        }).catch(function (error) {
            alertify.error(error.response.data.message);
        })
    }
}

export default new Action;
