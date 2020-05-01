@php
    /**
     * @var Webkul\Product\Models\ProductFlat $product
     * @var string $message
     */
    $url = route('shop.productOrCategory.index', $product->url_key);
    $email_url = 'mailto:your@email.com?' . http_build_query([
        'subject' => $message,
        'body' => $message . ' ' . $url
    ]);
@endphp

<email-share></email-share>

@push('css')
    <style>
        .bb-social--email a svg > path {
            fill: #272928;
        }
    </style>
@endpush

@push('scripts')
    <script type="text/x-template" id="email-share-link">
        <li class="bb-social-share__item bb-social--email">
            <a :href="shareUrl" target="_blank">
                @include('social_share::icons.email')
            </a>
        </li>
    </script>

    <script type="text/javascript">
        Vue.component('email-share', {
            template: '#email-share-link',
            data: function () {
                return {
                    shareUrl: '{{ $email_url }}'
                }
            }
        });
    </script>
@endpush