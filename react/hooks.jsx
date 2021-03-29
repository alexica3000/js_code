// react hooks

/*
this.setState({
    errorMsg: "",
    items: [item1, item2]
});

import React, { useState } from "react";

const App = () => {
    const [items, setIems] = useState([]);
    const [errorMsg, setErrorMsg] = useState("");
};

export default App;
*/


import React, { useState } from "react";

const App = () => {
    const [items, setIems] = useState([]);
    const [errorMsg, setErrorMsg] = useState("");

    return (
        <form>
            <button onClick={() => setItems(["item A", "item B"])}>
                Set items
            </button>
        </form>
    );
};

export default App;
