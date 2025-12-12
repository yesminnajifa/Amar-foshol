<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Plant Disease Detector — আমারফসল</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom visuals & animations */
    :root{
      --g1:#16a34a; /* emerald-600 */
      --g2:#22c55e; /* lime-500 */
      --g3:#86efac; /* light */
      --bg:#f7f7f7;
    }
    body{background:radial-gradient(circle at 10% 10%, rgba(34,197,94,0.06), transparent 10%), radial-gradient(circle at 90% 90%, rgba(16,185,129,0.04), transparent 12%), var(--bg);}
    .floating-card{
      transform: translateY(0);
      transition: transform .45s cubic-bezier(.2,.9,.3,1), box-shadow .3s;
    }
    .floating-card:hover{
      transform: translateY(-8px);
      box-shadow: 0 30px 60px rgbao(16,185,129,0.12);
    }

    /* glowing title */
    .glow-title{
      background: linear-gradient(90deg,var(--g1),var(--g2),var(--g3));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      animation: titlePulse 3s ease-in-out infinite;
      text-shadow: 0 6px 18px rgba(16,185,129,0.12);
    }
    @keyframes titlePulse{
      0%{filter:brightness(1)}
      50%{filter:brightness(1.08) saturate(1.05)}
      100%{filter:brightness(1)}
    }

    /* analyze shimmer */
    .shimmer {
      position: relative;
      overflow: hidden;
    }
    .shimmer::after{
      content:"";
      position:absolute;
      inset:0;
      background:linear-gradient(120deg, rgba(255,255,255,0) 0%, rgba(255,255,255,0.12) 50%, rgba(255,255,255,0) 100%);
      transform:translateX(-120%);
      transition:transform .9s ease-in-out;
    }
    .shimmer.play::after{ transform:translateX(120%); }

    /* leaf spinner */
    .leaf-spinner{
      width:64px;height:64px;border-radius:50%;
      display:grid;place-items:center;
      background:linear-gradient(135deg,var(--g3),rgba(255,255,255,0.85));
      box-shadow:0 6px 18px rgba(16,185,129,0.12);
      animation:spin 1.2s linear infinite;
    }
    .leaf-spinner svg{width:36px;height:36px;fill:var(--g1)}
    @keyframes spin{100%{transform:rotate(360deg)}}

    /* result fade-in */
    .fade-in{animation:fadeIn .45s ease both}
    @keyframes fadeIn{from{opacity:0;transform:translateY(6px)}to{opacity:1;transform:none}}

    /* confidence bar animation */
    .bar-bg{background:linear-gradient(90deg,#ecfccb,#bbf7d0);border-radius:999px}
    .bar-fill{height:12px;border-radius:999px;background:linear-gradient(90deg,var(--g1),var(--g2));width:0%;transition:width 1s cubic-bezier(.2,.9,.3,1)}
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6">
  <main class="w-full max-w-4xl">

    <!-- Header -->
<header class="mb-6 text-center w-full break-words overflow-visible">
  <h1 class="text-4xl sm:text-5xl font-extrabold glow-title leading-snug sm:leading-tight">
    🌿 প্লান্ট ডিজিস ডিটেক্টর
  </h1>
  <p class="mt-2 text-gray-600 text-base sm:text-lg leading-relaxed px-2 sm:px-6">
    ছবি আপলোড করে তাত্ক্ষণিকভাবে রোগ শনাক্ত করুন — ফলাফল বাংলা ও ভয়েস আউটপুটসহ।
  </p>
</header>


    <!-- Card -->
    <section class="bg-white rounded-2xl p-6 sm:p-8 shadow-xl floating-card">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">

        <!-- Left: Upload + Result -->
        <div class="flex flex-col gap-4">
          <!-- Upload box -->
          <div id="uploadCard" class="p-4 rounded-xl bg-gradient-to-br from-white to-green-50 border border-green-100 shadow-inner hover:shadow transition relative">
            <label for="fileInput" class="cursor-pointer">
              <div id="previewWrap" class="w-full h-60 bg-white border-2 border-dashed border-emerald-200 rounded-lg flex flex-col items-center justify-center overflow-hidden transition-transform duration-300 hover:scale-[1.01]">
                <img id="previewImg" src="https://placehold.co/512x384/ffffff/10b981?text=Click+or+Drop+Image" alt="preview" class="object-cover w-full h-full hidden">
                <div id="placeholder" class="text-center p-6">
                    <!-- Image Preview / Gallery Icon -->
<div class="flex justify-center mb-3">
  <img 
    src="\assets\img\gallery.png" 
    alt="Gallery Icon" 
    class="w-14 h-14 object-contain mx-auto mb-3 transition-transform duration-300 hover:scale-105"
  />
</div>

                    <p class="text-gray-600">এখানে ক্লিক করুন অথবা ছবিটা ড্রপ করুন</p>
                  <p class="text-xs text-gray-400 mt-2">(পাতার পরিষ্কার ছবি—আলো ঠিক রাখুন)</p>
                </div>
              </div>
            </label>
            <input id="fileInput" type="file" accept="image/*" class="hidden">
            <div class="mt-4 flex gap-3">
              <button id="analyzeBtn" class="shimmer play px-4 py-2 rounded-lg bg-emerald-600 text-white font-semibold shadow hover:scale-[1.02] disabled:opacity-60" disabled>বিশ্লেষণ করুন</button>
              <button id="speakResultBtn" class="px-4 py-2 rounded-lg border border-emerald-200 text-emerald-700 hidden">ফলাফল পড়ে শোনান</button>
              <button id="clearBtn" class="ml-auto px-3 py-2 rounded-lg text-sm border border-gray-200 text-gray-600 hidden">Clear</button>
            </div>
          </div>

          <!-- Result card -->
          <div id="resultCard" class="p-4 rounded-xl bg-emerald-50 border border-emerald-100 min-h-[120px] hidden">
            <div id="resultHeader" class="flex items-center justify-between">
              <div>
                <h3 id="diseaseName" class="text-lg font-bold text-emerald-800">রোগ: -</h3>
                <p id="shortDesc" class="text-sm text-emerald-700 italic mt-1">চিহ্নিতকরণ অপেক্ষা করছে...</p>
              </div>
              <div id="leafSpinnerWrap" class="hidden">
                <div class="leaf-spinner" aria-hidden>
                  <svg viewBox="0 0 24 24"><path d="M12 2C9 7 3 9 3 13c0 3.866 3.582 7 9 7s9-3.134 9-7c0-4-6-6-9-11z"/></svg>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <div class="flex items-center justify-between mb-2">
                <span class="text-sm text-emerald-700 font-medium">বিশ্বাসযোগ্যতা (Confidence)</span>
                <span id="confPercent" class="text-sm font-semibold text-emerald-800">0%</span>
              </div>
              <div class="bar-bg w-full h-3">
                <div id="barFill" class="bar-fill" style="width:0%"></div>
              </div>
            </div>

            <div class="mt-4">
              <h4 class="text-sm font-semibold text-emerald-800">প্রস্তাবিত চিকিৎসা / পরামর্শ</h4>
              <p id="remedyText" class="text-sm text-emerald-700 mt-1">ফলাফল পাওয়া গেলে এখানে প্রদর্শিত হবে।</p>
            </div>
          </div>
        </div>

        <!-- Right: History -->
        <aside class="flex flex-col gap-4">
          <div class="p-4 rounded-xl bg-white border border-emerald-100 shadow-sm">
            <h3 class="font-semibold text-emerald-800">আপলোড তথ্য</h3>
            <p id="metaInfo" class="text-sm text-gray-600 mt-2">কোনো ছবি আপলোড করা হয়নি।</p>
          </div>

          <div class="p-4 rounded-xl bg-white border border-emerald-100 shadow-sm flex-1 overflow-auto">
            <h3 class="font-semibold text-emerald-800 mb-3">History</h3>
            <table class="w-full text-sm">
              <thead class="text-left text-gray-500">
                <tr><th class="pb-2">সময়</th><th class="pb-2">রোগ</th><th class="pb-2">বিশ্বাস%</th></tr>
              </thead>
              <tbody id="historyBody" class="text-gray-700">
                <tr><td colspan="3" class="py-4 text-gray-400">কোনো রেকর্ড নেই</td></tr>
              </tbody>
            </table>
            <div class="mt-4 text-right">
              <button id="clearHistory" class="text-sm text-red-600 hover:underline">History মুছুন</button>
            </div>
          </div>

        </aside>

      </div>
    </section>

    <!-- Footer -->
    <footer class="mt-6 text-center text-sm text-gray-500">
      Powered by আমারফসল • Developed by তোমার নাম — Md Asif Ikbal
    </footer>
  </main>

  <script>
    // Elements
    const fileInput = document.getElementById('fileInput');
    const previewImg = document.getElementById('previewImg');
    const placeholder = document.getElementById('placeholder');
    const analyzeBtn = document.getElementById('analyzeBtn');
    const resultCard = document.getElementById('resultCard');
    const diseaseName = document.getElementById('diseaseName');
    const shortDesc = document.getElementById('shortDesc');
    const remedyText = document.getElementById('remedyText');
    const barFill = document.getElementById('barFill');
    const confPercent = document.getElementById('confPercent');
    const leafSpinnerWrap = document.getElementById('leafSpinnerWrap');
    const metaInfo = document.getElementById('metaInfo');
    const speakResultBtn = document.getElementById('speakResultBtn');
    const clearBtn = document.getElementById('clearBtn');

    // history
    const historyBody = document.getElementById('historyBody');
    const clearHistoryBtn = document.getElementById('clearHistory');

    let loadedImageBase64 = null;

    // sample disease set (including cotton diseases)
    const DISEASES = [
      { name: "কটন লিফ ব্লাইট", short: "পাতায় বাদামী দাগ ও খালের নষ্ট হওয়া লক্ষণ", remedy: "অবিলম্বে আক্রান্ত অংশ কেটে ফেলুন; সফল কীটনাশক/ফড়ণ ব্যবস্থাপনা করুন; পানি-নিয়ন্ত্রণ বজায় রাখুন" },
      { name: "কটন ক্যালারি স্পট", short: "ছোট-ছোট দাগ, ধীরে ধীরে ছড়ায়", remedy: "বীজ-রোগ প্রতিরোধক ব্যবহার; রোগাক্রান্ত অংশ ধ্বংস করুন; রোটেশন" },
      { name: "ফাঙ্গাল ইনফেকশন (আলোর অভাবে)", short: "পাতার উল্টোদিকে সাদা ছত্রাক ঢেকে যেতে পারে", remedy: "সঠিক সেচ ও বাতাস বাতাসের ব্যবস্থা; ফাঙ্গাল স্প্রে প্রয়োগ" },
      { name: "স্বাস্থ্যবান পাতা", short: "কোনো লক্ষণ নেই — পাতা সবুজ ও ঝকঝকে", remedy: "নিয়মিত পরিদর্শন চালান; প্রয়োজনীয় খনিজ যোগ করুন" },
      { name: "সাধারণ পেপার স্পট", short: "ছোট দাগ যা বড় হয়ে যেতে পারে", remedy: "নিয়মিত সার ও পানি ব্যালান্স বজায় রাখুন; স্থানীয় কীট ব্যবস্থাপনা" }
    ];

    // drag & drop
    const previewWrap = document.getElementById('previewWrap');
    ['dragenter','dragover'].forEach(evt=>{
      previewWrap.addEventListener(evt, e=>{ e.preventDefault(); previewWrap.classList.add('ring','ring-emerald-200'); });
    });
    ['dragleave','drop'].forEach(evt=>{
      previewWrap.addEventListener(evt, e=>{ previewWrap.classList.remove('ring','ring-emerald-200'); });
    });
    previewWrap.addEventListener('drop', async (e)=>{
      e.preventDefault();
      const file = e.dataTransfer.files[0];
      if(file) handleFile(file);
    });

    fileInput.addEventListener('change', (e)=>{
      const file = e.target.files[0];
      if(file) handleFile(file);
    });

    clearBtn.addEventListener('click', clearAll);

    function handleFile(file){
      // preview
      const reader = new FileReader();
      reader.onload = function(ev){
        previewImg.src = ev.target.result;
        previewImg.classList.remove('hidden');
        placeholder.classList.add('hidden');
        analyzeBtn.disabled = false;
        clearBtn.classList.remove('hidden');
        // store base64 (without prefix)
        loadedImageBase64 = ev.target.result.split(',')[1];
        metaInfo.textContent = `ফাইল: ${file.name} • সাইজ: ${Math.round(file.size/1024)} KB`;
      }
      reader.readAsDataURL(file);
    }

    // Analyze (simulate or call API)
    analyzeBtn.addEventListener('click', async ()=>{
      if(!loadedImageBase64) {
        alert('প্রথমে ছবিটি আপলোড করুন।');
        return;
      }
      // UI start
      analyzeBtn.disabled = true;
      analyzeBtn.classList.add('opacity-80','cursor-wait');
      leafSpinnerWrap.classList.remove('hidden');
      resultCard.classList.remove('hidden');
      diseaseName.textContent = 'চিহ্নিত করা হচ্ছে...';
      shortDesc.textContent = 'ছবি বিশ্লেষণ করা হচ্ছে, অনুগ্রহ করে অপেক্ষা করুন।';
      remedyText.textContent = 'কয়েক সেকেন্ডে ফলাফল দেখানো হবে।';
      barFill.style.width = '0%';
      confPercent.textContent = '0%';
      speakResultBtn.classList.add('hidden');

      // small artificial delay to simulate processing & nicer UX
      await new Promise(r => setTimeout(r, 900));

      // SIMULATE ANALYSIS: pick a random disease & confidence (replace this with real API call)
      const idx = Math.floor(Math.random()*DISEASES.length);
      const chosen = DISEASES[idx];
      const confidence = Math.floor(75 + Math.random()*24); // 75-98%

      // show result
      diseaseName.textContent = `রোগ: ${chosen.name}`;
      shortDesc.textContent = chosen.short;
      remedyText.textContent = chosen.remedy;
      confPercent.textContent = `${confidence}%`;
      // animate bar
      setTimeout(()=>{ barFill.style.width = `${confidence}%`; }, 80);

      // hide spinner
      leafSpinnerWrap.classList.add('hidden');

      // show speak & enable clear
      speakResultBtn.classList.remove('hidden');
      clearBtn.classList.remove('hidden');

      // store history
      pushHistory({ time: new Date().toLocaleString('bn-BD'), disease: chosen.name, conf: confidence });

      // voice output in Bengali
      const speakText = `চিহ্নিত রোগ: ${chosen.name}। বিশ্বাসযোগ্যতা ${confidence} শতাংশ। প্রস্তাবিত চিকিৎসা: ${chosen.remedy}`;
      speakInBangla(speakText);

      // UI end
      analyzeBtn.disabled = false;
      analyzeBtn.classList.remove('opacity-80','cursor-wait');
    });

    // speak button (replay)
    speakResultBtn.addEventListener('click', ()=>{
      const txt = `${diseaseName.textContent.replace('রোগ: ','')}। ${confPercent.textContent}। ${remedyText.textContent}`;
      speakInBangla(`চিহ্নিত রোগ: ${txt}`);
    });

    // Clear
    function clearAll(){
      previewImg.src='https://placehold.co/512x384/ffffff/10b981?text=Click+or+Drop+Image';
      previewImg.classList.add('hidden');
      placeholder.classList.remove('hidden');
      loadedImageBase64 = null;
      analyzeBtn.disabled = true;
      resultCard.classList.add('hidden');
      metaInfo.textContent = 'কোনো ছবি আপলোড করা হয়নি।';
      clearBtn.classList.add('hidden');
      speakResultBtn.classList.add('hidden');
    }

    // History (localStorage)
    function pushHistory(record){
      const list = JSON.parse(localStorage.getItem('pd_history')||'[]');
      list.unshift(record);
      localStorage.setItem('pd_history', JSON.stringify(list.slice(0,20)));
      renderHistory();
    }
    function renderHistory(){
      const list = JSON.parse(localStorage.getItem('pd_history')||'[]');
      if(list.length===0){
        historyBody.innerHTML = `<tr><td colspan="3" class="py-4 text-gray-400">কোনো রেকর্ড নেই</td></tr>`;
        return;
      }
      historyBody.innerHTML = '';
      list.forEach(item=>{
        const tr = document.createElement('tr');
        tr.className = 'border-t';
        tr.innerHTML = `<td class="py-2 text-xs text-gray-600">${item.time}</td><td class="py-2 font-medium text-emerald-800">${item.disease}</td><td class="py-2 text-gray-700">${item.conf}%</td>`;
        historyBody.appendChild(tr);
      });
    }
    clearHistoryBtn.addEventListener('click', ()=>{
      if(confirm('আপনি কি ইতিহাস মুছে ফেলতে চান?')){
        localStorage.removeItem('pd_history');
        renderHistory();
      }
    });
    // init
    renderHistory();

    /* ---------- Text-to-Speech (Bangla, female attempt) ---------- */
    function speakInBangla(text){
      if(!('speechSynthesis' in window)){
        alert('এই ব্রাউজারে টেক্সট-টু-স্পিচ সাপোর্ট নেই।');
        return;
      }
      // cancel any ongoing
      window.speechSynthesis.cancel();

      const utter = new SpeechSynthesisUtterance(text);
      utter.lang = 'bn-BD'; // Bangla

      // choose female voice if available (best effort)
      const voices = window.speechSynthesis.getVoices();
      // Try multiple heuristics to find a bn female voice
      let chosen = voices.find(v => v.lang.startsWith('bn') && /female|female|FEMALE/i.test(v.name));
      if(!chosen) chosen = voices.find(v => v.lang.startsWith('bn'));
      if(!chosen) chosen = voices.find(v => /bengali|bangla/i.test(v.name));
      // As last resort, pick any female-like voice
      if(!chosen) chosen = voices.find(v => /female|woman|girl/i.test(v.name));
      if(chosen) utter.voice = chosen;

      // tuning
      utter.rate = 0.95;
      utter.pitch = 1.05;

      // speak
      window.speechSynthesis.speak(utter);
    }

    // Note: voices may not be immediately available in some browsers; ensure they load
    window.speechSynthesis.onvoiceschanged = () => { /* no-op: ensures voices are loaded */ };

    // Accessibility: keyboard support for file drop area (enter to open)
    previewWrap.addEventListener('keydown', (e)=>{
      if(e.key === 'Enter' || e.key === ' ') fileInput.click();
    });
  </script>
</body>
</html>
