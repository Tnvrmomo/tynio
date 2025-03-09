<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pi Network Payment</title>
    <?php wp_head(); ?>
</head>
<body>
    <form id="pi-payment-form" method="POST">
        <p><?php _e('Pay with Pi Network', 'pi-payment'); ?></p>
        
        <div class="form-group">
            <label for="pi-amount"><?php esc_html_e('Amount', 'pi-payment-plugin'); ?></label>
            <input type="text" id="pi-amount" name="pi_amount" required>
        </div>

        <div class="form-group">
            <label for="pi-address"><?php esc_html_e('Pi Network Address', 'pi-payment-plugin'); ?></label>
            <input type="text" id="pi-address" name="pi_address" required>
        </div>

        <input type="hidden" name="action" value="pi_payment_process">
        <?php wp_nonce_field('pi_payment_nonce', 'pi_payment_nonce_field'); ?>

        <button type="submit"><?php _e('Pay Now', 'pi-payment'); ?></button>
    </form>

    <?php wp_footer(); ?>
</body>
</html>