import axios from "axios";

export function sendEvent(data) {

    console.log(data);
    console.log(window.location.protocol + '//' + window.location.host + '/api/write_event');

    axios(
        {
            method: 'post',
            url: '/api/write_event',
            data: data
        });

}
