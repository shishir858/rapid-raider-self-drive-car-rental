<!-- Book Now Modal -->
<div class="booking-modal-overlay" id="bookingModalOverlay" aria-hidden="true">
    <div class="booking-modal" role="dialog" aria-labelledby="bookingModalTitle" aria-modal="true">
        <button type="button" class="booking-modal-close" id="bookingModalClose" aria-label="Close">&times;</button>
        <h2 id="bookingModalTitle" class="booking-modal-title">Book Your Self Drive Car</h2>
        <p class="booking-modal-desc">Share your details — we will confirm availability and pricing on request.</p>
        <form class="booking-modal-form" id="bookingModalForm" data-endpoint="send-enquiry.php">
            <input type="hidden" name="form_type" value="book">
            <div class="form-group">
                <label for="bm_name">Name *</label>
                <input type="text" id="bm_name" name="name" required placeholder="Your full name" autocomplete="name">
            </div>
            <div class="form-group">
                <label for="bm_phone">Phone *</label>
                <input type="tel" id="bm_phone" name="phone" required placeholder="Your mobile number" autocomplete="tel">
            </div>
            <div class="form-group">
                <label for="bm_email">Email</label>
                <input type="email" id="bm_email" name="email" placeholder="Optional" autocomplete="email">
            </div>
            <div class="form-group">
                <label for="bm_service">Service / vehicle</label>
                <select id="bm_service" name="service">
                    <option value="">Select</option>
                    <?php foreach ($services as $s): ?>
                    <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="bm_datetime">Preferred date &amp; time</label>
                <input type="datetime-local" id="bm_datetime" name="datetime">
            </div>
            <div class="form-group">
                <label for="bm_message">Message</label>
                <textarea id="bm_message" name="message" rows="3" placeholder="Vehicle preference, duration, etc."></textarea>
            </div>
            <div class="booking-form-message" id="bookingFormMessage" role="status"></div>
            <button type="submit" class="btn-submit btn-full" id="bookingFormSubmit"><i class="fas fa-paper-plane"></i> Send Booking Request</button>
        </form>
    </div>
</div>
