
<?php foreach ($alumniList as $alumnus) :?>
    <?= $alumnus->first_name.' '.$alumnus->last_name ?>
<?php endforeach; ?>
<div id="ac-chat-container" class="col-lg-12">
    <section id="chat" class="panel">

        <div class="panel-body">
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