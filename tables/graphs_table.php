
<br><hr><br>
<h1 class="center" id="graphs"><a href="graphs" title="Graph Operations">Graph Operations</a></h1><br>

<table>

    <thead>
    <tr>
        <th><h3>Node / Edge Management</h3></th>
        <th><h3>Storage</h3></th>
        <th><h3>Add Vertex</h3></th>
        <th><h3>Add Edge</h3></th>
        <th><h3>Remove Vertex</h3></th>
        <th><h3>Remove Edge</h3></th>
        <th><h3>Query</h3></th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td class="graph"><a href="http://en.wikipedia.org/wiki/Adjacency_list"><h3>Adjacency list</h3></a></td>
        <td class="graph"><code class="yellow">O(|V|+|E|)</code></td>
        <td class="graph"><code class="green">O(1)</code></td>
        <td class="graph"><code class="green">O(1)</code></td>
        <td class="graph"><code class="yellow">O(|V| + |E|)</code></td>
        <td class="graph"><code class="yellow">O(|E|)</code></td>
        <td class="graph"><code class="yellow">O(|V|)</code></td>
    </tr>
    <tr>
        <td class="graph"><a href="http://en.wikipedia.org/wiki/Incidence_list"><h3>Incidence list</h3></a></td>
        <td class="graph"><code class="yellow">O(|V|+|E|)</code></td>
        <td class="graph"><code class="green">O(1)</code></td>
        <td class="graph"><code class="green">O(1)</code></td>
        <td class="graph"><code class="yellow">O(|E|)</code></td>
        <td class="graph"><code class="yellow">O(|E|)</code></td>
        <td class="graph"><code class="yellow">O(|E|)</code></td>
    </tr>
    <tr>
        <td class="graph"><a href="http://en.wikipedia.org/wiki/Adjacency_matrix"><h3>Adjacency matrix</h3></a></td>
        <td class="graph"><code class="red">O(|V|^2)</code></td>
        <td class="graph"><code class="red">O(|V|^2)</code></td>
        <td class="graph"><code class="green">O(1)</code></td>
        <td class="graph"><code class="red">O(|V|^2)</code></td>
        <td class="graph"><code class="green">O(1)</code></td>
        <td class="graph"><code class="green">O(1)</code></td>
    </tr>
    <tr>
        <td class="graph"><a href="http://en.wikipedia.org/wiki/Incidence_matrix"><h3>Incidence matrix</h3></a></td>
        <td class="graph"><code class="red">O(|V| &sdot; |E|)</code></td>
        <td class="graph"><code class="red">O(|V| &sdot; |E|)</code></td>
        <td class="graph"><code class="red">O(|V| &sdot; |E|)</code></td>
        <td class="graph"><code class="red">O(|V| &sdot; |E|)</code></td>
        <td class="graph"><code class="red">O(|V| &sdot; |E|)</code></td>
        <td class="graph"><code class="yellow">O(|E|)</code></td>
    </tr>
  </tbody>
</table>
