<?php

namespace App\Services;

use Illuminate\Http\Request;

class GetInputData
{
    public function getInputDataArticleAndReview(Request $request)
    {
        $input = $request->validated();
        $faqData = $request->input('faq', []);
        $advantagesData = array_map(function($item){
            $item['is_pro'] = 1;
            return $item;
        }, $request->input('pros', []) );
        $disAdvantagesData = array_map(function($item){
            $item['is_pro'] = 0;
            return $item;
        }, $request->input('cons', []) );
        $relatedData = $request->input('related_posts', []);

        return ['input' => $input, 'faqData' => $faqData, 'advantagesData' => $advantagesData,
                'disAdvantagesData' => $disAdvantagesData, 'relatedData' => $relatedData
               ];
    }
}
