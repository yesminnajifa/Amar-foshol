<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>লাইভ মিটিং — আমারফসল (Zoom-like Dashboard)</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://meet.jit.si/external_api.js"></script>

  <style>
    body { font-family: "Noto Sans Bengali", sans-serif; background:#0f172a; color:#0f172a; }
    .app { max-width:1200px; margin:20px auto; }
    .meeting-shell { display:grid; grid-template-columns: 1fr 320px; gap:16px; min-height:70vh; }
    .video-area { background: linear-gradient(180deg,#e9fdeb,#ffffff); border-radius:12px; overflow:hidden; position:relative; }
    .side-panel { background: #ffffff; border-radius:12px; padding:12px; box-shadow: 0 8px 30px rgba(2,6,23,0.12); height:70vh; overflow:auto; }
    .controls { position:sticky; bottom:0; left:0; right:0; display:flex; gap:10px; padding:12px; justify-content:center; align-items:center; background:linear-gradient(90deg,rgba(255,255,255,0.9),rgba(255,255,255,0.95)); box-shadow:0 -6px 20px rgba(2,6,23,0.06); }
    .control-btn { padding:10px 14px; border-radius:10px; font-weight:700; display:inline-flex; gap:8px; align-items:center; cursor:pointer; border:1px solid rgba(15,23,42,0.06); }
    .btn-red { background:#ef4444; color:white; }
    .btn-emerald { background:linear-gradient(90deg,#16a34a,#22c55e); color:white; }
    .small-muted { color:#065f46; opacity:.85; font-size:13px; }
    .participants-list { max-height: calc(70vh - 120px); overflow:auto; }
    .participant { display:flex; align-items:center; gap:10px; padding:8px; border-radius:8px; margin-bottom:6px; background:#f8fff9; }
    .participant .avatar { width:40px; height:40px; border-radius:999px; background:linear-gradient(90deg,#bbf7d0,#d1fae5); display:grid;place-items:center;font-weight:700;color:#065f46; }
    .meta { font-size:13px; color:#064e3b; }
    .topbar { display:flex; justify-content:space-between; align-items:center; margin-bottom:10px; }
    #jitsi-container { width:100%; height:calc(70vh - 72px); border:0; border-radius:10px; }
    @media(max-width:1000px){ .meeting-shell { grid-template-columns: 1fr; } .side-panel { height:auto; } #jitsi-container { height:60vh; } }
  </style>
</head>
<body>
  <div class="app px-4">
    <header class="mb-4 text-white">
      <h1 class="text-2xl font-extrabold text-white">🌿 আমারফসল — লাইভ মিটিং</h1>
      <p class="text-sm text-emerald-200">এখানে ফার্মাররা এক্সপার্টের সাথে ভিডিও কলে কথা বলতে পারবে — Zoom-এর মতো ড্যাশবোর্ড।</p>
    </header>

    <div class="meeting-shell">
      <div class="video-area p-4">
        <div class="topbar flex items-center justify-between mb-3">
          <div>
            <div class="small-muted">রুম</div>
            <div id="roomName" class="font-bold text-lg text-emerald-800">amarfosol-meeting</div>
          </div>
          <div>
            <div class="small-muted">তুমি:</div>
            <div id="localDisplayName" class="font-semibold text-emerald-800">Guest</div>
          </div>
        </div>

        <div id="jitsi-container" class="rounded-lg shadow-inner"></div>

        <div class="controls mt-4">
          <button id="toggleAudio" class="control-btn" title="Mute/Unmute">
            🎙️ <span id="audioLabel">মিউট</span>
          </button>

          <button id="toggleVideo" class="control-btn" title="Start/Stop Video">
            🎥 <span id="videoLabel">ভিডিও বন্ধ</span>
          </button>

          <button id="toggleChat" class="control-btn" title="Toggle Chat">
            💬 <span id="chatLabel">চ্যাট</span>
          </button>

          <button id="hangup" class="control-btn btn-red" title="Leave Call">
            ⛔ ছেড়ে যান
          </button>
        </div>
      </div>

      <aside class="side-panel">
        <div class="mb-3">
          <h3 class="font-bold text-emerald-800">মিটিং শীর্ঘ (Quick)</h3>
          <p class="text-sm text-gray-600">Start / Join / Invite</p>
        </div>

        <div class="flex gap-2 mb-4">
          <input id="displayNameInput" class="p-2 border rounded w-full" placeholder="তোমার নাম লিখুন (ভিডিওতে দেখাবে)" />
          <button id="applyName" class="px-3 py-2 btn-emerald rounded">Save</button>
        </div>

        <div class="flex gap-2 mb-4">
          <input id="roomInput" class="p-2 border rounded w-full" placeholder="রুম নাম লিখুন (না দিলে auto)" />
          <button id="startBtn" class="px-3 py-2 btn-emerald rounded">Start / Join</button>
        </div>

        <div class="mb-3">
          <h4 class="font-semibold text-emerald-800">অংশগ্রহণকারী</h4>
          <div id="participants" class="participants-list mt-2"></div>
        </div>

        <div class="mb-3">
          
          <button id="openChat" class="mt-2 px-3 py-2 rounded border border-emerald-600 text-emerald-700">চ্যাট খুলুন</button>
        </div>

        <div class="mb-3">
          <h4 class="font-semibold text-emerald-800">মিটিং লোগ</h4>
          <div id="eventLog" class="text-xs text-gray-600 mt-2 max-h-40 overflow-auto p-2 bg-gray-50 rounded"></div>
        </div>

        <div class="mt-4">
          <button id="inviteLink" class="w-full px-3 py-2 rounded bg-emerald-600 text-white">Invite Link কপি করুন</button>
        </div>
      </aside>
    </div>
  </div>

<script>
let api = null;
let currentRoom = 'amarfosol-meeting';
let localName = 'Guest';
const jitsiContainer = document.getElementById('jitsi-container');
const participantsEl = document.getElementById('participants');
const eventLog = document.getElementById('eventLog');
const roomNameEl = document.getElementById('roomName');
const localDisplayNameEl = document.getElementById('localDisplayName');

function logEvent(txt){
  const t = document.createElement('div');
  t.textContent = `[${new Date().toLocaleTimeString()}] ${txt}`;
  eventLog.prepend(t);
}

function startJitsi(room, name){
  if(api){ try{ api.executeCommand('hangup'); }catch(e){} api.dispose(); api = null; participantsEl.innerHTML=''; logEvent('রিনিশিয়ালাইজিং...'); }

  currentRoom = room || ('amarfosol-' + Math.floor(Math.random()*99999));
  roomNameEl.textContent = currentRoom;
  localName = name || localName;
  localDisplayNameEl.textContent = localName;

  const domain = "meet.jit.si";
  const options = {
    roomName: currentRoom,
    parentNode: jitsiContainer,
    interfaceConfigOverwrite: { SHOW_JITSI_WATERMARK:false, SHOW_WATERMARK_FOR_GUESTS:false },
    configOverwrite: { disableDeepLinking:true },
    userInfo: { displayName: localName }
  };

  try{ api = new JitsiMeetExternalAPI(domain, options); }catch(err){ alert('Jitsi API লোড হয়নি।'); console.error(err); return; }

  api.addEventListener('videoConferenceJoined', e=>{ logEvent('আপনি মিটিং-এ যোগ দিয়েছেন।'); updateParticipants(); });
  api.addEventListener('participantJoined', e=>{ logEvent(`Joined: ${e.displayName || e.id}`); updateParticipants(); });
  api.addEventListener('participantLeft', e=>{ logEvent(`Left: ${e}`); updateParticipants(); });
  api.addEventListener('incomingMessage', e=>{ logEvent(`Message: ${e.from} → ${e.text}`); });
  setTimeout(updateParticipants,1500);
}

async function updateParticipants(){
  if(!api) return;
  try{
    const list = await api.getParticipantsInfo();
    participantsEl.innerHTML='';
    const me = document.createElement('div');
    me.className='participant';
    me.innerHTML=`<div class="avatar">${(localName[0]||'G').toUpperCase()}</div><div><div class="font-semibold">${localName} (আপনি)</div><div class="meta">Local</div></div>`;
    participantsEl.appendChild(me);
    list.forEach(p=>{
      const div=document.createElement('div');
      div.className='participant';
      const nm=p.displayName||p.formattedDisplayName||p.id||'Guest';
      div.innerHTML=`<div class="avatar">${(nm[0]||'U').toUpperCase()}</div><div><div class="font-semibold">${nm}</div><div class="meta">id: ${p.participantId||p.id}</div></div>`;
      participantsEl.appendChild(div);
    });
  }catch(err){ console.warn('getParticipantsInfo not available',err); }
}

document.getElementById('applyName').addEventListener('click', ()=>{
  const val=document.getElementById('displayNameInput').value.trim();
  if(val){ localName=val; localDisplayNameEl.textContent=localName; logEvent('নাম সেট করা হয়েছে: '+localName); }
});

document.getElementById('startBtn').addEventListener('click', ()=>{
  const roomVal=document.getElementById('roomInput').value.trim();
  const nameVal=document.getElementById('displayNameInput').value.trim()||localName;
  startJitsi(roomVal||currentRoom,nameVal);
});

document.getElementById('toggleAudio').addEventListener('click', ()=>{ if(!api){ alert('প্রথমে Start/Join করুন'); return; } api.executeCommand('toggleAudio'); logEvent('Toggle Audio কল করা হয়েছে'); });
document.getElementById('toggleVideo').addEventListener('click', ()=>{ if(!api){ alert('প্রথমে Start/Join করুন'); return; } api.executeCommand('toggleVideo'); logEvent('Toggle Video কল করা হয়েছে'); });
document.getElementById('toggleChat').addEventListener('click', ()=>{ if(!api){ alert('প্রথমে Start/Join করুন'); return; } api.executeCommand('toggleChat'); logEvent('Chat টগল করা হয়েছে'); });
document.getElementById('hangup').addEventListener('click', ()=>{ if(!api){ alert('কোনো মিটিং নেই'); return; } api.executeCommand('hangup'); logEvent('মিটিং থেকে বের হয়েছেন।'); setTimeout(()=>{ jitsiContainer.innerHTML=''; api.dispose(); api=null; participantsEl.innerHTML=''; },700); });
document.getElementById('openChat').addEventListener('click', ()=>{ if(!api){ alert('প্রথমে Start/Join করুন'); return; } api.executeCommand('toggleChat'); });
document.getElementById('inviteLink').addEventListener('click', async ()=>{ const url=`https://meet.jit.si/${currentRoom}`; await navigator.clipboard.writeText(url); alert('Invite link কপি করা হলো: '+url); logEvent('Invite link কপি করা হয়েছে'); });

roomNameEl.textContent=currentRoom;
localDisplayNameEl.textContent=localName;
logEvent('ড্যাশবোর্ড প্রস্তুত — Start/Join চাপুন।');
</script>
</body>
</html>
