<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>আজকের বাজার দর</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  body {
    background-color: #f7f7f7;
    font-family: 'Noto Sans Bengali', sans-serif;
  }
</style>
</head>
<body class="p-6">
<main class="max-w-6xl mx-auto">
<h1 class="text-3xl font-bold text-emerald-700 mb-6 text-center">🌾 আজকের বাজার দর</h1>
<div class="overflow-x-auto">
  <table class="min-w-full bg-white rounded-lg shadow-lg">
    <thead>
      <tr class="bg-emerald-100 text-emerald-900 font-semibold">
        <th class="py-3 px-4 text-left">পণ্যের নাম</th>
        <th class="py-3 px-4 text-left">শ্রেণী</th>
        <th class="py-3 px-4 text-left">গতকালের দাম (৳)</th>
        <th class="py-3 px-4 text-left">আজকের দাম (৳)</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
      <!-- Vegetables -->
      <tr><td class="py-2 px-4">টমেটো 🍅</td><td class="py-2 px-4">শাক-সবজি</td><td class="py-2 px-4">45</td><td class="py-2 px-4">50</td></tr>
      <tr><td class="py-2 px-4">পটল 🥒</td><td class="py-2 px-4">শাক-সবজি</td><td class="py-2 px-4">30</td><td class="py-2 px-4">32</td></tr>
      <tr><td class="py-2 px-4">বেগুন 🍆</td><td class="py-2 px-4">শাক-সবজি</td><td class="py-2 px-4">35</td><td class="py-2 px-4">38</td></tr>
      <tr><td class="py-2 px-4">ঢেঁড়স 🌿</td><td class="py-2 px-4">শাক-সবজি</td><td class="py-2 px-4">28</td><td class="py-2 px-4">30</td></tr>
      <tr><td class="py-2 px-4">শশা 🥒</td><td class="py-2 px-4">শাক-সবজি</td><td class="py-2 px-4">25</td><td class="py-2 px-4">27</td></tr>
      <tr><td class="py-2 px-4">আলু 🥔</td><td class="py-2 px-4">শাক-সবজি</td><td class="py-2 px-4">40</td><td class="py-2 px-4">42</td></tr>
      <tr><td class="py-2 px-4">পেঁয়াজ 🧅</td><td class="py-2 px-4">শাক-সবজি</td><td class="py-2 px-4">80</td><td class="py-2 px-4">85</td></tr>

      <!-- Fruits -->
      <tr><td class="py-2 px-4">কলা 🍌</td><td class="py-2 px-4">ফলমূল</td><td class="py-2 px-4">60</td><td class="py-2 px-4">62</td></tr>
      <tr><td class="py-2 px-4">আম 🥭</td><td class="py-2 px-4">ফলমূল</td><td class="py-2 px-4">120</td><td class="py-2 px-4">125</td></tr>
      <tr><td class="py-2 px-4">পেয়ারা 🍐</td><td class="py-2 px-4">ফলমূল</td><td class="py-2 px-4">50</td><td class="py-2 px-4">52</td></tr>

      <!-- Meat -->
      <tr><td class="py-2 px-4">মুরগির মাংস 🍗</td><td class="py-2 px-4">মাংস</td><td class="py-2 px-4">220</td><td class="py-2 px-4">230</td></tr>
      <tr><td class="py-2 px-4">গরুর মাংস 🐄</td><td class="py-2 px-4">মাংস</td><td class="py-2 px-4">550</td><td class="py-2 px-4">560</td></tr>
      <tr><td class="py-2 px-4">ভেড়ার মাংস 🐑</td><td class="py-2 px-4">মাংস</td><td class="py-2 px-4">500</td><td class="py-2 px-4">510</td></tr>

      <!-- Rice -->
      <tr><td class="py-2 px-4">সিরাজী চাল 🍚</td><td class="py-2 px-4">চাল</td><td class="py-2 px-4">70</td><td class="py-2 px-4">72</td></tr>
      <tr><td class="py-2 px-4">আনন্দ চাল 🍚</td><td class="py-2 px-4">চাল</td><td class="py-2 px-4">68</td><td class="py-2 px-4">69</td></tr>
      <tr><td class="py-2 px-4">সরিষা চাল 🍚</td><td class="py-2 px-4">চাল</td><td class="py-2 px-4">65</td><td class="py-2 px-4">66</td></tr>

      <!-- Others -->
      <tr><td class="py-2 px-4">ডিম 🥚</td><td class="py-2 px-4">ডিম</td><td class="py-2 px-4">12</td><td class="py-2 px-4">13</td></tr>
      <tr><td class="py-2 px-4">দুধ (১ লিটার) 🥛</td><td class="py-2 px-4">দুধ</td><td class="py-2 px-4">65</td><td class="py-2 px-4">68</td></tr>
      <tr><td class="py-2 px-4">চিনি 🍬</td><td class="py-2 px-4">মিষ্টি</td><td class="py-2 px-4">55</td><td class="py-2 px-4">57</td></tr>
      <tr><td class="py-2 px-4">তেল (১ লিটার) 🛢️</td><td class="py-2 px-4">তেল</td><td class="py-2 px-4">150</td><td class="py-2 px-4">155</td></tr>
      <tr><td class="py-2 px-4">মশলা 🌶️</td><td class="py-2 px-4">মশলা</td><td class="py-2 px-4">90</td><td class="py-2 px-4">95</td></tr>
    </tbody>
  </table>
</div>
</main>
</body>
</html>
