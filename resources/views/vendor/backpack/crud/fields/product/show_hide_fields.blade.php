@push('after_scripts')
<script type="text/javascript">

    $( document ).ready(function() {

        showHideRejectFields()
        showHideSpecialPriceFields()
    });

    function showHideRejectFields() {
        let isApproved = $("select[name=is_approved]");
        let rejectedReason = $("#rejected_reason");
        let rejectedDate = $("#date_of_rejected");

        console.log(isApproved.val())
        if(isApproved.val() === '0') {
            rejectedReason.show()
            rejectedDate.show()
        }

        isApproved.change(function() {
            if(isApproved.val() === '0') {
                rejectedReason.show()
                rejectedDate.show()
            } else {
                rejectedReason.hide()
                rejectedDate.hide()
            }              
        })
    }

    function showHideSpecialPriceFields() {

        let specialPrice = $("input[name=special_price]");
        let specialPriceFrom = $("#special_price_from");
        let specialPriceTo = $("#special_price_to");
        console.log(specialPrice.val(), 'precio especial')
        if(specialPrice.val() > 0) {
            specialPriceFrom.show()
            specialPriceTo.show()
        }

        specialPrice.keyup(function() {
            if(specialPrice.val() > 0) {
                specialPriceFrom.show()
                specialPriceTo.show()
            } else {
                specialPriceFrom.hide()
                specialPriceTo.hide()
            }              
        })
    }
</script>
@endpush 