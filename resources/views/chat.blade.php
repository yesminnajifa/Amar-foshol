<!doctype html>
<html lang="bn">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ফার্মার সহকারী</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
:root{
  --g1:#16a34a; --g2:#22c55e; --g3:#86efac;
  --bg:#f7f7f7;
}
body{background:var(--bg);}
.floating-card{
  transition: transform .4s cubic-bezier(.2,.9,.3,1), box-shadow .3s;
}
.floating-card:hover{transform:translateY(-6px);box-shadow:0 20px 40px rgba(16,185,129,0.12);}
.glow-title{
  background: linear-gradient(90deg,var(--g1),var(--g2),var(--g3));
  -webkit-background-clip: text; background-clip: text;
  color: transparent; animation: titlePulse 3s ease-in-out infinite;
  text-shadow: 0 4px 12px rgba(16,185,129,0.12);
}
@keyframes titlePulse{
  0%{filter:brightness(1)}
  50%{filter:brightness(1.08) saturate(1.05)}
  100%{filter:brightness(1)}
}
.animate-bounce{animation:bounce 0.6s infinite alternate;}
@keyframes bounce{from{transform:translateY(0)}to{transform:translateY(-6px)}}
.delay-150{animation-delay:.15s;}
.delay-300{animation-delay:.3s;}
</style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
<main class="w-full max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-6">

<!-- Left: Farmer Chat -->
<section class="bg-white rounded-2xl p-6 shadow-xl floating-card flex flex-col h-[500px]">
  <h1 class="text-2xl font-bold text-emerald-800 mb-4 glow-title">🌿 ফার্মার চ্যাট সিস্টেম</h1>
  <div id="chatBox" class="flex-1 overflow-auto border border-emerald-100 rounded-lg p-4 mb-4 bg-green-50"></div>
  <div class="flex gap-2">
    <input id="chatInput" type="text" placeholder="আপনার প্রশ্ন লিখুন..." class="flex-1 px-4 py-2 border border-emerald-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-400">
    <button id="sendBtn" class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:scale-105 transition-transform">প্রশ্ন পাঠান</button>
  </div>
</section>

<!-- Right: Voice Assistant -->
<section class="bg-white rounded-2xl p-6 shadow-xl floating-card flex flex-col h-[500px] items-center justify-center">
  <h1 class="text-2xl font-bold text-emerald-800 mb-4 glow-title">🎤 ভয়েস অ্যাসিস্ট্যান্ট</h1>
  <p class="mb-4 text-emerald-700 text-center">মাইক্রোফোন বোতাম চাপুন এবং বাংলায় কথা বলুন</p>
  <button id="voiceBtn" class="px-6 py-4 bg-emerald-600 text-white rounded-full text-2xl shadow-lg hover:scale-105 transition-transform">🎤</button>
  <div id="voiceStatus" class="mt-4 text-sm text-gray-600">অপেক্ষা করছে...</div>
  <!-- ChatGPT-style spinner -->
  <div id="voiceSpinner" class="mt-4 hidden flex gap-2">
    <div class="w-3 h-3 bg-emerald-600 rounded-full animate-bounce"></div>
    <div class="w-3 h-3 bg-emerald-600 rounded-full animate-bounce delay-150"></div>
    <div class="w-3 h-3 bg-emerald-600 rounded-full animate-bounce delay-300"></div>
  </div>
</section>

</main>

<script>
// ---------------- Farmer Chat ----------------
const chatBox = document.getElementById('chatBox');
const chatInput = document.getElementById('chatInput');
const sendBtn = document.getElementById('sendBtn');

sendBtn.addEventListener('click', sendMessage);
chatInput.addEventListener('keypress', (e)=>{if(e.key==='Enter') sendMessage();});

function sendMessage(){
  const msg = chatInput.value.trim();
  if(!msg) return;

  // Farmer message
  const userDiv = document.createElement('div');
  userDiv.className = 'mb-2 text-right';
  userDiv.innerHTML = `<span class="inline-block bg-emerald-600 text-white px-3 py-1 rounded-lg">${msg}</span>`;
  chatBox.appendChild(userDiv);

  chatInput.value='';
  chatBox.scrollTop = chatBox.scrollHeight;

  // Simulate assistant response
  setTimeout(()=>{
    const resDiv = document.createElement('div');
    resDiv.className = 'mb-2 text-left';
    const response = generateResponse(msg);
    resDiv.innerHTML = `<span class="inline-block bg-green-100 text-emerald-800 px-3 py-1 rounded-lg">${response}</span>`;
    chatBox.appendChild(resDiv);
    chatBox.scrollTop = chatBox.scrollHeight;
  },500);
}

function generateResponse(msg){
  // Dummy logic for now
  if(msg.includes('pani')) return 'আপনার ফসলের জন্য ১ দিন/২ দিন অন্তর পানি দেওয়া ভালো।';
  if(msg.includes('rog')) return 'রোগ শনাক্ত করতে ছবি আপলোড করুন বা বিস্তারিত বর্ণনা দিন।';
  if(msg.includes('alu')) return 'আলুর জন্য ২-৩ দিন অন্তর পানি দেওয়া উচিত।';
  if(msg.includes('begun')) return 'বেগুনের জন্য ৩-৪ দিন অন্তর পানি দেওয়া ভালো।';
  if(msg.includes('dhan')) return 'ধানের জন্য ৫-৭ দিন অন্তর পানি দেওয়া উচিত।';
  if(msg.includes('kharif')) return 'খরিফ ফসলের জন্য বর্ষাকালে বেশি পানি প্রয়োজন।';
  if(msg.includes('potol')) return 'পটলের জন্য ৩-৪ দিন অন্তর পানি দেওয়া উচিত।';
  if(msg.includes('shobji')) return 'সবজির জন্য ২-৩ দিন অন্তর পানি দেওয়া ভালো।';
  if(msg.includes('komla')) return 'কমলাল লেবুর জন্য ৩-৪ দিন অন্তর পানি দেওয়া উচিত।';
  if(msg.includes('murgi')) return 'মুরগির জন্য ২-৩ দিন অন্তর পানি দেওয়া উচিত।';
  if(msg.includes('mach')) return 'মাছের জন্য ১-২ দিন অন্তর পানি পরিবর্তন করা উচিত।';
  if(msg.includes('shorong')) return 'আমি বুঝতে পারিনি, আরও বিস্তারিত বলুন।';
  return 'আমি আপনার প্রশ্নটি গ্রহণ করেছি।';
}

// ---------------- Voice Assistant ----------------
const voiceBtn = document.getElementById('voiceBtn');
const voiceStatus = document.getElementById('voiceStatus');
const voiceSpinner = document.getElementById('voiceSpinner');

voiceBtn.addEventListener('click', ()=>{
  if(!('speechSynthesis' in window)){
    alert('ভয়েস সাপোর্ট নেই।');
    return;
  }

  voiceSpinner.classList.remove('hidden');
  voiceStatus.textContent='প্রসেসিং...';

  setTimeout(()=>{
    const msg = 'স্বাগতম! আমি আপনার ফসলের সহকারী। আপনি যে প্রশ্ন করবেন আমি উত্তর দেব।';
    const utter = new SpeechSynthesisUtterance(msg);
    utter.lang = 'bn-BD';
    utter.rate = 1;
    utter.pitch = 1;
    utter.onend = ()=>{
      voiceStatus.textContent='অপেক্ষা করছে...';
      voiceSpinner.classList.add('hidden');
    };
    window.speechSynthesis.speak(utter);
  },500);
});
</script>
</body>
</html>
