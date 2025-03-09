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
        <!-- Add form fields as needed -->
        <button type="submit"><?php _e('Pay Now', 'pi-payment'); ?></button>
    </form>

    <?php wp_footer(); ?>
</body>
</html>