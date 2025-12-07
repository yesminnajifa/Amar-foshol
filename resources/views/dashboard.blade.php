<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>আমারফসল - Farm Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans p-6">

<main class="max-w-7xl mx-auto space-y-8">

  <h1 class="text-3xl font-bold text-emerald-700 text-center">🌾 ফার্মার ড্যাশবোর্ড</h1>

  <!-- Weather Forecast -->
  <section class="bg-white p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-semibold text-emerald-800 mb-4">☀️ আবহাওয়ার পূর্বাভাস</h2>
    <p class="text-gray-600 mb-3">আপনার এলাকার জন্য ৭ দিনের পূর্বাভাস:</p>
    <div id="weatherForecast" class="grid grid-cols-1 sm:grid-cols-7 gap-4">
      <!-- JS দিয়ে ডাইনামিকভাবে বসানো হবে -->
    </div>
  </section>

  <!-- Climate Tips -->
  <section class="bg-white p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-semibold text-emerald-800 mb-4">🌡️ জলবায়ু ভিত্তিক পরামর্শ</h2>
    <p id="climateTips" class="text-gray-700 text-sm leading-relaxed">
      আজকের তাপমাত্রা অনুযায়ী ফসলের যত্নের টিপস এখানে প্রদর্শিত হবে।
    </p>
  </section>

  <!-- Irrigation Calculator -->
  <section class="bg-white p-6 rounded-xl shadow-lg">
    <h2 class="text-2xl font-semibold text-emerald-800 mb-4">💧 জল ব্যবহার ক্যালকুলেটর</h2>
    <form id="irrigationForm" class="space-y-4">
      <div>
        <label class="block text-gray-700 mb-1">জমির সাইজ (শতক/একর)</label>
        <input type="number" id="landSize" placeholder="শতক বা একর" class="w-full border border-gray-300 p-2 rounded-lg">
      </div>
      <div>
        <label class="block text-gray-700 mb-1">ফসলের ধরণ</label>
        <select id="cropType" class="w-full border border-gray-300 p-2 rounded-lg">
          <option value="rice">ধান</option>
          <option value="wheat">গম</option>
          <option value="vegetable">সবজি</option>
          <option value="fruit">ফলমূল</option>
        </select>
      </div>
      <button type="button" id="calculateWater" class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700">ক্যালকুলেট করুন</button>
    </form>
    <p class="mt-3 text-gray-700">প্রয়োজনীয় পানি: <span id="waterResult">0</span> লিটার</p>
  </section>

</main>

<script>
// Sample Weather Forecast
const weatherForecast = document.getElementById('weatherForecast');
const days = ['শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহস্পতি', 'শুক্র'];
days.forEach(day => {
  const temp = Math.floor(Math.random()*10+25);
  const div = document.createElement('div');
  div.className = "bg-emerald-50 p-3 rounded-lg text-center";
  div.innerHTML = `<strong>${day}</strong><br>${temp}°C`;
  weatherForecast.appendChild(div);
});

// Climate Tips
const climateTips = document.getElementById('climateTips');
const todayTemp = Math.floor(Math.random()*10+25);
climateTips.textContent = `আজকের তাপমাত্রা ${todayTemp}°C। ${todayTemp>30 ? 'পানি বেশি দিন এবং দুপুরে ছায়া দিন।' : 'ফসলের পানি স্বাভাবিক রাখুন।'}`;

// Irrigation Calculator
document.getElementById('calculateWater').addEventListener('click', () => {
  const land = parseFloat(document.getElementById('landSize').value) || 0;
  const crop = document.getElementById('cropType').value;
  let waterPerUnit = 0;

  switch(crop){
    case 'rice': waterPerUnit=1200; break;
    case 'wheat': waterPerUnit=800; break;
    case 'vegetable': waterPerUnit=500; break;
    case 'fruit': waterPerUnit=600; break;
  }

  const totalWater = land * waterPerUnit;
  document.getElementById('waterResult').textContent = totalWater;
});
</script>

</body>
</html>
