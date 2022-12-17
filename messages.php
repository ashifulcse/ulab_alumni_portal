<style>
    .message_main_div {
        width: 100%; 
        height: 100vh;
        display: block;
        background: #f0c51f;
        position: relative;
    }
    .message_card_header { 
        text-align: center;
        line-height: 1;
        background: #303a3f;
        position: absolute;
        top: 0;
        width: 100%; 
        color: #fff;
    }
    .message_body{
        position: absolute;
        top: 4rem;
        height: 74vh;
        display: block;
        overflow-y: scroll;
    }

    .reply_message {
        display: block;
        padding: 10px;
    }
    .reply_message h4 {
        margin: 0;
        margin-bottom: 5px; 
        font-size: 20px;
    }
    .reply_message p {
        margin: 0;
        text-align: justify;
    }
    .message_time {
        font-size: 14px;
        color: #312f2f;
        padding-bottom: 10px;
        text-align: left;
    }
    .type_message{
        width: 100%;
        background: #303a3f;
        padding: 10px;
        background: #f0c51f;
        position: fixed;
        bottom: 2px;
    }
    .type_message input {
        padding: 10px;
        width: 400px;
    }
    .type_message button {
        padding: 10px;
    }
</style>

<div class="message_main_div">
    <div class="message_card_header">
        <h4>Live Chat</h4>
    </div>
    <div class="message_body">
        <div class="reply_message">
            <h4>Ashiful Islam</h4>
            <p class="message_time"> 10:40pm Dec 2022 </p>
            <p>
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
            </p>
        </div>

        <div class="reply_message">
            <h4>Shykat</h4>
            <p class="message_time"> 10:40pm Dec 2022 </p>
            <p>
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
            </p>
        </div>

        <div class="reply_message">
            <h4>Emon Khan</h4>
            <p class="message_time"> 10:40pm Dec 2022 </p>
            <p>
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
            </p>
        </div>

        <div class="reply_message">
            <h4>Ashiful Islam</h4>
            <p class="message_time"> 10:40pm Dec 2022 </p>
            <p>
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
            </p>
        </div>

        <div class="reply_message">
            <h4>Shykat</h4>
            <p class="message_time"> 10:40pm Dec 2022 </p>
            <p>
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
            </p>
        </div>

        <div class="reply_message">
            <h4>Emon Khan</h4>
            <p class="message_time"> 10:40pm Dec 2022 </p>
            <p>
                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
            </p>
        </div>
    </div>
    <div class="type_message">
         <input type="text" name="messages" value="Type your message ...">
         <button>Send</button>
    </div>
</div>