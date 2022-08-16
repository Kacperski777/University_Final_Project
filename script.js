
const CLIENT_ID = 'yXzKQhAa0cP3qgcJ'; //api key

// Asks for name and colour
let user_name = prompt("what is your name?")
let colour = prompt("Choose your colour:                                                                      "  + "Available: Black, Red, Yellow, Green, Blue, Pink, Purple.")





const drone = new ScaleDrone(CLIENT_ID, { //creates a new connection/user saves name and colour data
  data: { 
    name: user_name,
    color: colour
  },
}); //




let members = []; //adds number of members to the array

const DOM = {
    membersCount: document.querySelector('.members-count'),
    membersList: document.querySelector('.members-list'),
    messages: document.querySelector('.messages'),
    input: document.querySelector('.message-form__input'),
    form: document.querySelector('.message-form'),
  };

drone.on('open', error => { //check if server is connected
  if (error) {
    return console.error(error);
  }
  console.log('Successfully connected ');

  const room = drone.subscribe('observable-room'); //Name of my Room in dashboard
  room.on('open', error => {
    if (error) {
      return console.error(error);
    }
    console.log('Successfully joined room');
  });

  room.on('members', m => { //updates the list and adds name
    members = m;
    updateMembersDOM();
  });

  room.on('member_join', member => {
    members.push(member); //adds new member to array
    updateMembersDOM();
  });

  room.on('member_leave', ({id}) => {
    const index = members.findIndex(member => member.id === id);
    members.splice(index, 1);
    updateMembersDOM();
  });

  room.on('data', (text, member) => {
    if (member) {
      addMessageToListDOM(text, member);
    } else {
  
    }
  });
});







DOM.form.addEventListener('submit', sendMessage);

function sendMessage() {
  const value = DOM.input.value;
  if (value === '') {
    return;
  }
  DOM.input.value = '';
  drone.publish({
    room: 'observable-room',
    message: value,
  });
}

function createMemberElement(member) {
  const { name, color } = member.clientData;
  const el = document.createElement('div');
  el.appendChild(document.createTextNode(name));
  el.className = 'member';
  el.style.color = color;
  return el;
}

function updateMembersDOM() {
  DOM.membersCount.innerText = `Online: ${members.length}/20`;
  DOM.membersList.innerHTML = '';
  members.forEach(member =>
    DOM.membersList.appendChild(createMemberElement(member))
  );
}

function createMessageElement(text, member) {
  const el = document.createElement('div');
  el.appendChild(createMemberElement(member));
  el.appendChild(document.createTextNode(": " + text));
  el.className = 'message';
  return el;
}

function addMessageToListDOM(text, member) {
  const el = DOM.messages;
  const wasTop = el.scrollTop === el.scrollHeight - el.clientHeight;
  el.appendChild(createMessageElement(text, member));
  if (wasTop) {
    el.scrollTop = el.scrollHeight - el.clientHeight;
  }
}