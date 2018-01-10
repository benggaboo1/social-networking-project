

<div id="ac-chat-container" class="col-lg-12">
<section id="chat" class="panel">
<div class="container">
    <?php foreach ($alumniList as $alumnus) :?>
        <a href="<?= base_url().'messages/?member='.$alumnus->alumnus_id ?>"><p><?= $alumnus->first_name.' '.$alumnus->last_name ?></p></a>
    <?php endforeach; ?>
</div>
    <div class="panel-body">
        <?php if (ISSET($messages)) : ?>
            <?php foreach ($messages as $message) :?>
                <p><?= $message->content ?></p>
                <p>Sent: <?= date('mdY',strtotime($message->create_timestamp)) == date('mdY',strtotime("now")) ? date('h:i a',strtotime($message->create_timestamp)) : date('M d, Y h:i a',strtotime($message->create_timestamp)); ?></p>
                <p><?= $message->sender_name ?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <div class="panel-footer">
        
        <form role="form" method="POST">
            <div class="form-group">
                <label for="chatbox">Your Message</label>
                <textarea class="form-control" id="chatbox" placeholder="Type here..."></textarea>
                <input type="hidden" id="senderId" value="<?= $this->session->userdata('alumnus_id'); ?>"/>
            </div>
            <button type="button" id="sendMessage" class="btn btn-info">Send</button>
        </form>
        
    </div>

</section>



</div>
<script type="text/javascript" charset="utf8" src="<?php echo base_url('/assets/js/messages.js'); ?>"></script>


