
{if $is_top == 1}

    <div class="badge_is_top" style="">
        <span>TOP</span>
        <span class="badge_is_top_tooltip">TOP prekė</span>
    </div>


{/if}

{if $has_fast_shipping == 1}

    <div class="badge_has_fast_shipping">
        <div style="height: 35px; width:35px; display: flex; justify-content: center; align-items: center;">
            <img src="modules/istop/views/templates/hook/fast.png" alt="Greitas pristatymas" style="width:31px; height: 18px;">
        </div>
        <span class="badge_has_fast_shipping_tooltip">Greitas pristatymas</span>
    </div>


{/if}

{if $is_eko == 1}

    <div class="badge_is_eko">
        <span>EKO</span>
        <span class="badge_is_eko_tooltip">Augintas ekologiškai</span>
    </div>


{/if}

{if $is_good_price == 1}

    <div class="badge_is_good_price" style="">
        <span>%</span>
        <span class="badge_is_good_price_tooltip">Gera kaina</span>
    </div>


{/if}

{if $is_made_in_lt == 1}

    <div class="badge_is_made_in_lt" style="">
        <span>LT</span>
        <span class="badge_is_made_in_lt_tooltip">Užauginta Lietuvoje</span>
    </div>


{/if}

{if $is_recommended == 1}

    <div class="badge_is_recommended">
        <div style="height: 35px; width:35px; display: flex; justify-content: center; align-items: center;">
            <img src="modules/istop/views/templates/hook/like.png" alt="Rekomenduojama prekė" style="width:19px;">
        </div>
        <span class="badge_is_recommended_tooltip">Emedelynas rekomenduoja</span>
    </div>


{/if}
